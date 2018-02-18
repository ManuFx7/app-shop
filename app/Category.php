<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = ['id','name','description','image'];

    protected $guarded = [];

    /* Relaciones entre modelos */

    // $category->products();

    public function products(){

    	return $this->hasMany(Product::class);
    }

}
