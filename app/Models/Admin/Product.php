<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;

class Product extends Model
{
    use HasApiTokens;
    
    protected $fillable = [
        'name', 'detail', 'price', 'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
