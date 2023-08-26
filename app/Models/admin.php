<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class admin extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password'
    ];

    protected $table = 'admins';

    public function tesell_clothes():HasMany
    {
        return $this->hasMany(tesell_clothes::class);
    }

    public function techange_clothes():HasMany
    {
        return $this->hasMany(techange_clothes::class);
    }
}
