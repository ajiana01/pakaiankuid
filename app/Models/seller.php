<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'contact',
        'type'
    ];

    protected $table = 'sellers';
}