@extends('layouts.landing')

@section('content')
<section class="derecho">
  <div class="container pb-5 pt-5">
    <div class="text-center">
      <p class="font-weight-bold pb-3 letras5">Derecho Administrativo</p>
    </div>

    <div class="text-center div-imagen-container">
      <div class="imagen-container">
        <!-- Agregamos la clase img-fluid para hacer que la imagen sea responsive -->
        <img src="{{ asset('assets/img/derecho-7.jpg')}}" alt="Descripción de la imagen" class="img-fluid">
      </div>
    </div>

    <div class="text-justify div-texto-container">
      <!-- Puedes ajustar el tamaño del texto cambiando el valor de 'letras6' según tus necesidades -->
      <p class="letras6">
          Nuestra firma brinda servicios de asesoría en todo tipo de procedimientos administrativos ante las entidades de la administración pública, en los tres sectores de gobierno.
      </p>  
      
      <p class="letras6">
          Asimismo, asesoramos a nuestros clientes en procedimiento administrativo sancionar, procedimiento administrativo disciplinarios y obtención de toda clase de títulos habilitantes para poder llevar a cabo un proyecto de inversión (licencias, permisos, autorizaciones u otros).
      </p>
    </div>

  </div>
</section>
@endsection

@section('styles') 
  <link rel="stylesheet" href="{{ asset('assets/css/derecho.css')}}">
@endsection
