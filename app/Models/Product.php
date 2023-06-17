<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'description',
        'categories_id',
        'status'
    ];

    public function galleries(){
        return $this->hasOne(ProductGallery::class,'products_id','id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'categories_id','id');
    }
}
