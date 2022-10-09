<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class User extends Model
{
    use HasFactory;
    public $timestamps = null;
    public $fillable=[
        'username',
        'email',
        'validts',
        'confirmed',
    ];
    protected $attributes= [
    ];
    public function email(){
        return $this->hasOne('App\Models\Email');
    }
}
