<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    public function admin():BelongsTo
    {
        return $this->belongsTo(admin::class);
    }

    public function seller():BelongsTo
    {
        return $this->belongsTo(seller::class);
    }
}
