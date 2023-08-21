<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tesell_clothes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'description',
        'size',
        'colour',
        'price',
        'category',
    ];

    protected $guarded = [
        'upload_date'
    ];

    protected $table = 'tesell_clothes';
}
