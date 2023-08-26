<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function user_clothes():HasOne
    {
        return $this->hasOne(user_clothes::class);
    }

    public function seller():HasOne
    {
        return $this->hasOne(seller::class);
    }

    public function order():HasMany
    {
        return $this->hasMany(order::class);
    }
}