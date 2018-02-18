<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    
	/* Listado de Productos */
    public function index(){
    $products = Product::paginate(10);
    return view('admin.products.index',['products'=> $products]);
    }

    /* Mostrar formulario Creación */
    public function create(){

    return view('admin.products.create');
    }

    /* Registrar Producto */
    public function store(Request $request){

     //dd($request->all());

    $product = new Product();
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->long_description = $request->input('long_description');
    $product->save();

    return redirect('/admin/products');
    	
    }

     /* Mostrar formulario Edición */
    public function edit(){

    return view('admin.products.edit');
    }

    /* Actualizar Producto */
    public function update(Request $request){

     //dd($request->all());

    $product = new Product();
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->long_description = $request->input('long_description');
    $product->save();

    return redirect('/admin/products');
    	
    }
}
