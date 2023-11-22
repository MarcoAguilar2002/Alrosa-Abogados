@extends('layouts.landing')

@section('content')

<section class="bg-white" style="background-image: url('{{ asset('assets/img/fondo5.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-position: center center;">>
    <div class="container">
        <div class="row">
            <!-- Columna 1 -->
            <div class="col-md-6 texto font-weight-bold padre">
                <div class="">
                    <h2 class="font-weight-bold text-center ">¿Quiénes somos?</h2>
                    <p class="lead text-justify"> <!-- La clase lead aumenta el tamaño del texto en Bootstrap 4 -->
                        Somos un equipo de abogados comprometidos en prestar servicios integrales y especializados. Destacamos por nuestra amplia experiencia en el sector público y privado, lo que nos permite dar solución efectiva a los problemas desde diversos enfoques. Nos caracterizamos por brindar asesoría personalísima, con seguimiento permanente de acuerdo a las necesidades del caso concreto, su inversión está garantizada, asumimos sus intereses como propios.
                    </p>
                </div>
                
            </div>
            
            <!-- Columna 2 -->
            <div class="col-md-6 align-items-end">
                <img src="{{ asset('assets/img/persona5-re.png')}}" alt="">
                <!-- Contenido de la segunda columna -->
            </div>
        </div>
    </div>
</section>

<section class="container custom-section blanco">
    <div class="row padre">
        <!-- Columna 1 -->
        <div class="col-md-6">
            <div class="mt-5 mb-5 pr-5 border-right">   
                <h3 class="font-weight-bold  ">
                    Visión
                </h3>
                <p class="lead text-justify ">
                    Consolidarnos como un referente del arquetipo de la profesión ética, eficaz, diligente y oportuna.
                </p>
            </div>
        </div>
        <!-- Columna 2 -->
        <div class="col-md-6 p-auto ">
            <div class="mt-5 mb-5 text-justify pl-4">   
                <h3 class="font-weight-bold ">Misión</h3>
                <p class="lead text-justify">
                    Ejercemos la defensa con base en los cánones del acceso a la justicia, legalidad, debido proceso y búsqueda de la verdad.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="bg-white fondo "   style="background-image: url('{{ asset('assets/img/panal.jpg')}}');background-repeat: no-repeat; ">
    <div class="container">
        <div class="texto  text-center pt-5">
            <h2 class="font-weight-bold ">Nuestros valores son la base</h2>
                <h2 class="font-weight-bold "> de nuestra firma</h2>
        </div>
    </div>
    <div class="sec">
        <div class="wrapper">
            <ul class="carousel">
              <li class="card">
                <div class="img">
                    <img src="{{ asset('assets/img/honestidad.jpg')}}" alt="img" draggable="false">
                </div>
                <div>
                    <h2 class="texto">Honestidad</h2>
                </div>
                <div class="text-justify p-3">
                    <p>Actuamos de manera recta y probidad, siendo leales a nuestros principios y a nuestro país. Realizando asesorías legales al margen de la ley, por lo cual nos distingue una conducta ética, transparente y confiable.</p>
                </div>
                </li>
                <li class="card">
                    <div class="img">
                        <img src="{{ asset('assets/img/comunicacion.jpg')}}" alt="img" draggable="false">
                    </div>
                    <div>
                        <h2 class="texto">Comunicación</h2>
                    </div>
                    <div class="text-justify p-3">
                        <p>Usted no necesita saber de derecho, pero necesita un profesional que le explique de forma clara las consecuencias que el mismo tiene en su negocio. pero es que además nosotros necesitamos conocer su negocio para entender sus necesidades.
                        </p>
                    </div>
                    </li>

                    <li class="card">
                        <div class="img">
                            <img src="{{ asset('assets/img/transparencia.jpg')}}" alt="img" draggable="false">
                        </div>
                        <div>
                            <h2 class="texto">Transparencia</h2>
                        </div>
                        <div class="text-justify p-3">
                            <p>Somos totalmente claros tanto a la hora de explicar la situación jurídica como sus posibles soluciones a nuestros clientes. Creemos que es vital que el cliente entienda nuestro razonamiento y los conceptos jurídicos que se manejan.

                            </p>
                        </div>
                        </li>

                        <li class="card">
                            <div class="img">
                                <img src="{{ asset('assets/img/compromiso.jpg')}}" alt="img" draggable="false">
                            </div>
                            <div class="fondoh2">
                                <h2 class="texto">Compromiso</h2>
                            </div>
                            <div class="text-justify p-3">
                                <p>Cumplimos lo que ofrecemos. Asumimos las metas y defensas legales como propias. Somos respetuosos de la palabra y acuerdos con nuestros clientes, siendo confidenciales y manteniendo las reservas en la información como secreto profesional.

                                </p>
                            </div>
                        </li>

                        <li class="card">
                            <div class="img">
                                <img src="{{ asset('assets/img/excelencia.jpg')}}" alt="img" draggable="false">
                            </div>
                            <div>
                                <h2 class="texto">Excelencia y Capacidad</h2>
                            </div>
                            <div class="text-justify p-3">
                                <p>Contamos con un staff de profesionales de reconocida experiencia y en permanente actualización y formación, con un conocimiento profundo en nuestras áreas de práctica, todo ello para ofrecer servicios de la más alta calidad y eficiencia.

                                </p>
                            </div>
                        </li>
            </ul>
            <i id="left" class="fa-solid fa-angle-left"></i>
            <i id="right" class="fa-solid fa-angle-right"></i>
          </div>
          
    </div>
</section>



@endsection

@section('styles') 
    <link rel="stylesheet" href="{{asset('assets/css/nosotros.css')}}">
@endsection

@section('script')
  <script src="{{asset('assets/js/carrusel.js')}}" defer></script>
@endsection