@extends('layouts.landing')

@section('content')
<section class="derecho">
  <div class="container pb-5 pt-5">
    <div class="text-center">
      <p class="font-weight-bold pb-3 letras5">Derecho Ambiental</p>
    </div>

    <div class="text-center div-imagen-container">
      <div class="imagen-container">
        <!-- Agregamos la clase img-fluid para hacer que la imagen sea responsive -->
        <img src="{{ asset('assets/img/derecho-6.jpg')}}" alt="Descripción de la imagen" class="img-fluid">
      </div>
    </div>

    <div class="text-justify div-texto-container">
      <!-- Puedes ajustar el tamaño del texto cambiando el valor de 'letras6' según tus necesidades -->
      <p class="letras6">
        Nuestra firma brinda asesoría en temas ambientales a empresas de los sectores económicos, como agroindustriales, industria, energía, minería, pesca, entre otras. 
      </p>  
      
      <p class="letras6">
        Apoyamos a nuestros clientes en la obtención de permisos y licencias de carácter medioambiental.
      </p>
    </div>

  </div>
</section>
@endsection

@section('styles') 
  <link rel="stylesheet" href="{{ asset('assets/css/derecho.css')}}">
@endsection
