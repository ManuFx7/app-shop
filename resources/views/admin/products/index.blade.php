@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('body-class', 'landing-page')

@section('content')
<div style="height:55vh;background-color:#adadad;" class="header header-filter">
          <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Listado de Productos</h1>
                        <a href="{{ url('/admin/products/create')}}" class="btn btn-primary btn-round"> Crear Producto </a>
                 </div>
                </div>
                
            </div>   
        </div>

        <div class="main main-raised">
            <div class="container">   

             <div class="section text-center">
            
              <table class="table">
                <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center">Nombre</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Precio</th>
                        <th class="text-center">Categoría </th>
                        <th class="text-right">Acciones</th>
                    </tr>
                </thead>
                <tbody>

  <!-- Listado de Productos -->

       @foreach($products as $product)
        <tr>
            <td class="text-center">{{ $product->id }}</td>
            <td>{{ $product->name }} </td>
            <td class="col-md-4">{{ $product->description }}</td>
            <td>{{ $product->price }} &euro; </td>
            <td>{{ $product->category ? $product->category->name : 'General' }} </td>
             <td class="td-actions text-right">
                <form method="post" action="{{ url('admin/products/'.$product->id.'/delete') }}">
                {{csrf_field()}} {{method_field('DELETE')}}
                  <button type="button" title="Ver Producto" rel="tooltip" class="btn btn-info btn-simple">
                    <i class="material-icons">info</i>
                </button>
                <a href="{{ url('admin/products/'.$product->id.'/edit') }}" type="button" title="Editar Producto" rel="tooltip" class="btn btn-success btn-simple">
                    <i class="material-icons">edit</i>
                </a>
                <button type="submit" title="Eliminar Producto" rel="tooltip" class="btn btn-danger btn-simple">
                    <i class="material-icons">close</i>
                </button>
                </form>
            </td>
        </tr>

        @endforeach
       
    </tbody>
    {{ $products->links() }}
</table>

            </div>         
         </div>
        </div>
       

        <footer class="footer">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                               About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; 2016, made with <i class="fa fa-heart heart"></i> by Creative Tim
                </div>
            </div>
        </footer>
@endsection