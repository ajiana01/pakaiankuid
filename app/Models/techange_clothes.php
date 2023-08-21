<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techange_clothes extends Model
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

    protected $table = 'techange_clothes';
}

// $table->id();
//             $table->string('name');
//             $table->string('image');
//             $table->string('description');
//             $table->string('size', 3);
//             $table->string('colour');
//             $table->integer('price');
//             $table->string('category');
//             $table->timestamp('upload_date');