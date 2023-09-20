<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    public function varient()
    {
        return $this->hasMany(varients::class, 'pro_id', 'id')->where('status', 'active');
    }

    protected $fillable = [
        'product_name',
        'short_des',
        'long_des',
        'category',
        'banner',
    ];
}
