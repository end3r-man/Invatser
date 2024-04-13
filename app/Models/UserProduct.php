<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProduct extends Model
{
    use HasFactory;

    protected $fillable = [
            'user_id',
            'name',
            'code',
            'desc',
            'price',
            'detail',
    ];

    public function category()
    {
        return $this->belongsTo(UserCategories::class, 'cate', 'id');
    }

}
