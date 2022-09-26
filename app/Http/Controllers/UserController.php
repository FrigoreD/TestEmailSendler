<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function createUserForm(){
        return view('form');
}
    public function UserForm(Request $request){
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'username' => 'required|max:60|unique:users',
        ]);
        if(Email::query()->where('email', $request->email)->doesntExist()){
            Email::create([
                'email' => $request->email,
                'checked' => false,
                'valid' => true,
            ]);
        }
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'validts' => Carbon::now()->addMonth()->timestamp,
            'confirmed' => false,
        ]);
        $token = Str::random(20);
        $url = route('auth.email', [
            User::query()->where('username', $request->username)->value('username') . '?' . $token,
        ]);
        Mail::send('demoMail', ['url'=>$url], function($message) use ($request){
            $message->to($request->email);
        });
        return back()->with('success', 'user created');
    }

    public function check_email(Request $request){
        $this->validate($request, [
            'emailForm' => 'required',
        ]);
        $check = Email::query()->where('email', $request->emailForm);
        if(($check->exists()) && (!$check->value('checked'))){
            $check->update(['checked' => true]);
            return back()->with('successCheck', 'Email checked');
        }elseif(($check->exists()) && ($check->value('checked'))){
            return back()->with('error', 'Email was checked earlier');
        }else{
            try{
                $this->validate($request, [
                    'emailForm' => 'email',
                ]);
                Email::create([
                    'email' => $request->emailForm,
                    'checked' => true,
                    'valid' => true,
                ]);
            }catch (\Throwable $e){
                Email::create([
                    'email' => $request->emailForm,
                    'checked' => true,
                    'valid' => false,
                ]);
            }
            return back()->with('successCheck', 'Email checked');
        }
    }
    public function authenticateEmail(){
        $route = Route::getCurrentRoute()->parameters;
        User::query()->where('username', $route['token'])->update(['confirmed' => true]);
        return redirect('/')->with('success', 'Email confirmed');
    }
}

