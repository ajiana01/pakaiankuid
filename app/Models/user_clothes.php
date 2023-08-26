<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class user_clothes extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'image',
        'description'
    ];

    protected $table = 'user_clothes';

    public function user():BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function techange_clothes():HasOne
    {
        return $this->hasOne(techange_clothes::class);
    }
}
