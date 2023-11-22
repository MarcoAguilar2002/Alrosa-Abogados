@extends('layouts.landing')

@section('content')
<section class="derecho">
  <div class="container pb-5 pt-5">
    <div class="text-center">
      <p class="font-weight-bold pb-3 letras5">Derecho Laboral Privado</p>
    </div>

    <div class="text-center div-imagen-container">
      <div class="imagen-container">
        <!-- Agregamos la clase img-fluid para hacer que la imagen sea responsive -->
        <img src="{{ asset('assets/img/derecho.jpg')}}" alt="Descripción de la imagen" class="img-fluid">
      </div>
    </div>

    <div class="text-justify div-texto-container">
      <!-- Puedes ajustar el tamaño del texto cambiando el valor de 'letras6' según tus necesidades -->
      <p class="letras6">
        Nuestra firma ofrece a sus clientes una amplia gama de servicios especializados en el ámbito laboral y de seguridad social. Nos enfocamos en brindar asesoría integral en cuestiones laborales, como elaboración de contratos, negociación salarial, seguridad y salud ocupacional, intermediación laboral y asistencia en procedimientos de inspección. Además, nos especializamos en asesorar en temas relacionados con accidentes de trabajo y enfermedades profesionales.
    </p>  
      
    <p class="letras6">
        Asimismo, brindamos representación legal en procedimientos administrativos, arbitrales y judiciales relacionados al Seguro Complementario de Trabajo de Riesgo (SCTR). Contamos con experiencia en procedimientos ante la autoridad administrativa de trabajo, procesos arbitrales y procesos judiciales en materia laboral. Nuestro compromiso con nuestros clientes es brindarle un servicio completo y de calidad, ante toda autoridad e instancia.
    </p> 

    </div>

  </div>
</section>
@endsection

@section('styles') 
  <link rel="stylesheet" href="{{ asset('assets/css/derecho.css')}}">
@endsection
