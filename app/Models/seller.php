<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class seller extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'city',
        'contact',
        'type'
    ];

    protected $table = 'sellers';

    public function user():BelongsTo
    {
        return $this->belongsTo(user::class);
    }

    public function tesell_clothes():HasMany
    {
        return $this->hasMany(tesell_clothes::class);
    }
}
