<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests\ProductCreateRequest;

class ProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }


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
    public function store(ProductCreateRequest $request){

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
    public function edit($id){

    $product = Product::findOrFail($id);
    return view('admin.products.edit',['product' => $product]);
    }

    /* Actualizar Producto */
    public function update(ProductCreateRequest $request,$id){

    $product = Product::findOrFail($id);
    $product->name = $request->input('name');
    $product->description = $request->input('description');
    $product->price = $request->input('price');
    $product->long_description = $request->input('long_description');
    $product->save();

    return redirect('/admin/products');
    	
    }

    /* Borrado Producto */

    public function destroy(Request $request, $id){

        $product = Product::findOrFail($id);
        $product->delete();

        return back();

    }
}
