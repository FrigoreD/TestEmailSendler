<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    public function showUsers(){
        $users = User::query()->orderBy('username')->paginate(10);
        return view('list', compact('users'));
    }
}
