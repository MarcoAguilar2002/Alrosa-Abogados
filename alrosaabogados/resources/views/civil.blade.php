@extends('layouts.landing')

@section('content')
<section class="derecho">
  <div class="container pb-5 pt-5">
    <div class="text-center">
      <p class="font-weight-bold pb-3 letras5">Derecho Civil y Comercial</p>
    </div>

    <div class="text-center div-imagen-container">
      <div class="imagen-container">
        <!-- Agregamos la clase img-fluid para hacer que la imagen sea responsive -->
        <img src="{{ asset('assets/img/derecho2.jpg')}}" alt="Descripción de la imagen" class="img-fluid">
      </div>
    </div>

    <div class="text-justify div-texto-container">
      <!-- Puedes ajustar el tamaño del texto cambiando el valor de 'letras6' según tus necesidades -->
      <p class="letras6">
        Nuestra firma brinda a nuestros clientes asesoría en temas relacionados a contratos, derechos reales y responsabilidad civil. Somos especialistas en impugnación de acuerdos, nulidad de acto jurídico, acción pauliana o revocatoria, declaratoria y petición de herencia, interdictos, desalojos, reivindicación, prescripción adquisitiva de dominio, contratos (arrendamiento, hipotecas, donación, mutuos), indemnización, ejecución de garantías, obligaciones de dar suma de dinero, medidas cautelares, anulaciones y ejecuciones de laudo arbitral.
     </p>  
      

    </div>

  </div>
</section>
@endsection

@section('styles') 
  <link rel="stylesheet" href="{{ asset('assets/css/derecho.css')}}">
@endsection
