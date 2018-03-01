<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['name','description','long_description','price','category_id'];

    protected $guarded = [];

    /* Relacion entre modelos */

    // $product->category

    public function category(){

    	return $this->belongsTo(Category::class);
    }

    // $product->images

    public function images(){

    	return $this->hasMany(ProductImage::class);
    }

    
}
