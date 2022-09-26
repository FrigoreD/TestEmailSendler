<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;
    public $timestamps = null;
    public $fillable=[
        'email',
        'checked',
        'valid',
    ];
    public function user(){
        $this->belongsTo('App\Models\User');
    }
}
