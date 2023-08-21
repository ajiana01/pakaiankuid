<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'email',
        'password',
        'address'
    ];
    
    protected $guarded = [''];

    protected $table = 'users'; // USERS MODEL
}