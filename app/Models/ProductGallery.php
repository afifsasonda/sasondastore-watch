<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    protected $fillable = [
        'products_id',
        'photos'
    ];

    public function product(){
        return $this->belongsTo(Product::class,'products_id', 'id');
    }
}
