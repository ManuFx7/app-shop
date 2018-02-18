<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use App\ProductImage;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // model factories

    	/*factory(Category::class,5)->create();
        factory(Product::class,100)->create();
        factory(ProductImage::class,200)->create();*/

        /* Model Factory relacionados Crea 5 categorias y le agrega 10 productos*/

        $categories = factory(Category::class,5)->create();
        $categories->each(function($category){
        	// Creamos 10 producto para cada categoria
        	$products = factory(Product::class,10)->create();
        	$category->products()->saveMany($products);

        	/* Asociamos cada producto con 5 imagenes */
        	$products->each(function($product){
        		$product->images()->saveMany(factory(ProductImage::class,5)->make());
        	});

        });
    }
}
