<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function admin():BelongsTo
    {
        return $this->belongsTo(admin::class);
    }

    public function user_clothes():BelongsTo
    {
        return $this->belongsTo(user_clothes::class);
    }
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