@extends('layouts.landing')

@section('content')
<section class="derecho">
  <div class="container pb-5 pt-5">
    <div class="text-center">
      <p class="font-weight-bold pb-3 letras5">Derecho Constitucional</p>
    </div>

    <div class="text-center div-imagen-container">
      <div class="imagen-container">
        <!-- Agregamos la clase img-fluid para hacer que la imagen sea responsive -->
        <img src="{{ asset('assets/img/derecho3.jpg')}}" alt="Descripción de la imagen" class="img-fluid">
      </div>
    </div>

    <div class="text-justify div-texto-container">
      <!-- Puedes ajustar el tamaño del texto cambiando el valor de 'letras6' según tus necesidades -->
      <p class="letras6">
        Nuestra firma brinda asesoría en procesos constitucionales, tales como Amparos (derecho previsonal ONP-AFP), cumplimiento (instituciones del Estado), habeas data (derecho al acceso de información).
    </p>  
      

    </div>

  </div>
</section>
@endsection

@section('styles') 
  <link rel="stylesheet" href="{{ asset('assets/css/derecho.css')}}">
@endsection
