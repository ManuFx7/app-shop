@extends('layouts.app')

@section('title', 'Registro en App Shop')

@section('body-class', 'signup-page')

@section('content')
<div class="header header-filter" style="background-image: url('{{asset('img/city.jpg')}}'); background-size: cover; background-position: top center;">
<div class="container">
<div class="row">
    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
        <div class="card card-signup">

            <!-- Formulario de Registro -->

            <form class="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}


                <div class="header header-primary text-center">
                    <h4>Registro de Usuario</h4>
                </div>
                <p class="text-divider">Rellena los siguientes datos</p>
                <!-- GET Errors -->
                @foreach ($errors->all() as $error)
                 <div class="alert alert-danger"> {{ $error }} </div>
                @endforeach
 
                <div class="content">



                 <div class="input-group">
                     <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <input id="name" type="text" class="form-control" placeholder="Introduce nombre" name="name" value="{{ old('name') }}" required autofocus>
                  </div>


                 <div class="input-group">
                     <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                       <input id="email" type="email" placeholder="Introduce email" class="form-control" name="email" value="{{ old('email') }}" required>
                  </div>

                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                        </span>
                        <input id="password" placeholder="Introduzca su contraseña" type="password" class="form-control" name="password" required>
                    </div>

                       <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock_outline</i>
                        </span>
                        <input id="password-confirm" placeholder="Repita su contraseña" type="password" class="form-control" name="password_confirmation" required>
                    </div>
 
                    <hr>
                    
                </div>
                <div class="footer text-center">
                  <button type="submit" class="btn btn-simple btn-primary btn-lg">  Registrarme</button>
                </div>

            </form>

            <!-- Fin de Registro -->
        </div>
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
         #LiveYourDream  <i class="fa fa-heart heart"></i> 
    </div>
</div>
</footer>

        </div>
@endsection
