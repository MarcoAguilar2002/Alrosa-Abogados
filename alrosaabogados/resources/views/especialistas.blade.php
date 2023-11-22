@extends('layouts.landing')


@section('content')


<section >
    <div class="text-center banner position-relative blanco" style="background-image: url('{{ asset('assets/img/fondo5.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
        <div class="overlay"></div>
        <div class="container position-relative" style="z-index: 2;">
            <div>
                <h5 class=" pb-2 underline ">Nuestros especialistas</h5>
                <h2 class="font-weight-bold colorLetra">
                    La experiencia de nuestros especialistas garantiza la calidad de nuestro servicio
                </h2>
            </div>
        </div>
    </div>
</section >

<section class="sectiona " style="background-image: url('{{ asset('assets/img/fondo7.jpg')}}'); background-repeat: no-repeat; background-size: cover; ">
  <div class="grid">

    <div class="wrapper">
      <div class="container3">
        <img src="{{ asset('assets/img/doctor.jpg')}}" alt="" class="profile-img">
        <div class="content">
          <div class="sub-content">
            <h1>Danny Alvarado Rodriguez </h1>
            <span>alrosa@alrosaaboados.com</span>
            <p>Derecho laboral y seguridad social </p>
            <span class="location">Abogado por la Universidad Privada Antenor Orrego, con Maestría en Derecho Procesal por la Universidad San Martín de Porres. </span>
          </div>
          <div class="data">
            <a href="https://www.linkedin.com/in/danny-alvarado-28b04b170/"><i class="fa-brands fa-linkedin linked" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="container3">
        <img src="{{ asset('assets/img/icono.png')}}" alt="" class="profile-img">
        
        <div class="content">
          <div class="sub-content">
            <h1>Carlos Rodriguez Cruz</h1>
            <span>alrosa@alrosaaboados.com</span>
            <p>Derecho administrativo y ambiental</p>
            <span class="location">Abogado por la Universidad de Piura – UDEP,
              especialista en Derecho Administrativo y Derecho Ambiental.</span>
          </div>
          <div class="data">
            <a href="https://www.linkedin.com/in/carlos-rodriguez-cruz-710402117/?originalSubdomain=pe"><i class="fa-brands fa-linkedin linked" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="container3">
        <img src="{{ asset('assets/img/icono.png')}}" alt="" class="profile-img">
        
        <div class="content">
          <div class="sub-content">
            <h1>Paúl Salvatierra Alvarado</h1>
            <span>alrosa@alrosaaboados.com</span>
            <p>Derecho civil y comercial</p>
            <span class="location">Especialista en contratos, licencias y/o autorizaciones, operaciones comerciales y cumplimiento de disposiciones regulatorias. </span>
          </div>
          <div class="data">
            <a href="https://www.linkedin.com/in/danny-alvarado-28b04b170/"><i class="fa-brands fa-linkedin linked" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="wrapper">
      <div class="container3">
        <img src="{{ asset('assets/img/icono.png')}}" alt="" class="profile-img">
        
        <div class="content">
          <div class="sub-content">
            <h1>Manuel Zavaleta Alvarado</h1>
            <span>alrosa@alrosaaboados.com</span>
            <p>Derecho constitucional</p>
            <span class="location">Abogado por la Universidad Privada Antenor Orrego – UPAO, especialista en Derecho Constitucional.</span>
          </div>
          <div class="data">
            <a href="https://www.linkedin.com/in/manuel-zavaleta-alvarado-5a383186/?originalSubdomain=pe"><i class="fa-brands fa-linkedin linked" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

@endsection


@section('styles') 
    <link rel="stylesheet" href="{{asset('assets/css/especialistas.css')}}">
@endsection

@section('styles') 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

