@extends('layouts.app')

@section('title', 'Creación de Productos')

@section('body-class', 'landing-page')

@section('content')
<div style="height:55vh;background-color:#00C3E2;" class="header header-filter">
          <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h1 class="title">Home</h1>
                        <h4> Página de Inicio </h4>
                 </div>
                </div>
                
            </div>   
        </div>
        <div class="main main-raised">
            <div class="container">     
             <div class="section">
            @if(session('status'))
             <div class="alert alert-success">
                {{session('status')}}

            </div>
            @endif
            

            <!-- Contenido central pantalla Home --> 

            <ul class="nav nav-pills nav-pills-primary" role="tablist">
                <li class="active">
                    <a href="#dashboard" role="tab" data-toggle="tab">
                        <i class="material-icons">dashboard </i>
                       Carrito de Compras
                    </a>
                </li>
                
                <li>
                    <a href="#tasks" role="tab" data-toggle="tab">
                        <i class="material-icons">list</i>
                       Pedidos Realizados
                    </a>
                </li>
            </ul>


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