@extends('layouts.app')

@section('title', 'Edición de Productos')

@section('body-class', 'landing-page')

@section('content')
<div style="height:55vh;background-color:#adadad;" class="header header-filter">
          <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Edición de Productos</h1>
                        <a href="{{ url('/admin/products')}}" class="btn btn-primary btn-round"> Atras </a>
                 </div>
                </div>
                
            </div>   
        </div>
        <div class="main main-raised">
            <div class="container">     
             <div class="section">
            
             <!-- Formulario -->

     <!-- Mostrador de Errores --> 

     @if($errors->any())
     <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li> {{ $error }} </li>
        @endforeach
      </ul>
     </div>
     @endif

     <!-- Fin de Mostrado de Errores -->

     <form method="POST" action="{{ url('admin/products/'.$product->id.'/update')}}">
              {{ csrf_field() }}
             {{ method_field('PUT')}}
         <div class="col-md-6 col-lg-6">
          <div class="form-group">
             <label for="exampleInput1">Nombre producto actual </label>
             <input type="text" class="form-control" name="name" id="name" value="{{ $product->name, old('name')  }}">
          </div>
          </div>

           <div class="col-md-6 col-lg-6">
           <div class="form-group">
             <label for="exampleInput2" class="bmd-label-floating">Introduzca descripcion corta producto</label>
             <input type="text" class="form-control" step="0.01" name="description" id="description" value="{{ $product->description, old('description') }}">
          </div></div>

          <div class="col-md-12 col-lg-12">
           <div class="form-group">
             <label for="exampleInput3" class="bmd-label-floating">Introduzca precio del producto</label>
             <input type="number" class="form-control" name="price" id="price" value="{{ $product->price, old('price') }}">
          </div>
          </div>
        </div>
           <div class="col-md-12 col-lg-12">

          <textarea class="form-control" placeholder="Descripcion extensa del producto" rows="5" name="long_description">{{ $product->long_description }}</textarea>


          </div>

           <div class="col-md-12 col-lg-12">
          <button type="submit" class="btn btn-primary"> Guardar Producto </button><a href="{{ url('/admin/products')}}" class="btn btn-danger">Regresar </a>
           
          </div>
          </div>



            </form>
            
             <!-- Fin de Formulario -->
            <br><BR>

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