@extends('layouts.landing')


@section('content')
<section class="principal" style="background-image: url('{{ asset('assets/img/fondo8.jpg')}}');">
    <main class="secundario" >
        
        <!-- Primera Fila (Logo) -->
        <div class= "row text-center pt-5">
            <div class="col">
                <img src="{{ asset('assets/img/ALROSA-logo.png')}}" alt="Logo de la empresa" />
            </div>
        </div>
        <!-- Segunda Fila (Slogan) -->
        <div class="row text-center  p-5">
            <div class="col">
                <h3 class="blanco font-weight-bold fuente1">
                    Excelencia Legal, Compromiso Personal:<br>Su Éxito, Nuestra Misión
                </h3>
            </div>
        </div>

        <!-- Tercera Fila (Botones) -->
        <div class="row text-center p-5">
            <div class="col">
                <a href="{{route('areas')}}">
                    <button class="btn btn-nuestro btn-lg mx-4 square-button blanco">Nuestros Servicios</button>
                </a>
                
                <a href="{{route('contactanos')}}">
                    <button  class="btn btn-secondary btn-lg square-button">Contáctanos</button>
                </a>
            </div>
        </div>
    </main>
</section>

<section class="p-5" style="background-image: url('{{ asset('assets/img/fondo2.png')}}');no-repeat;">
     <!--Pilares-->
     <div class="container" >
        <div class="pilares-header mb-4">
            <h1 class="blanco">Nuestros Pilares</h1>
            <div class="line "></div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card bg-white">
                    <div class="mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4 padre">
                                <h4 class=" text-dark text-center ">Tecnología e Innovación</h4>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Apostamos por la innovación, utilizando aplicaciones y herramientas en constante evolución que repercuten en la calidad y en la agilidad del servicio prestado.
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>

            <div class="col-md-6 mb-4">
                <div class="card bg-white">
                    <div class="mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4 padre">
                                <h4 class=" text-dark text-center ">Experiencia y compromiso</h4>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Nuestra sólida experiencia es la base de nuestro éxito, respaldada por resultados comprobados en diversos sectores. 
                                    </p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>


            <div class="col-md-6 mb-4">
                <div class="card bg-white">
                    <div class="mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4 padre">
                                <h4 class=" text-dark text-center ">Servicio Especializado</h4>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Brindamos a nuestros clientes una asesoría legal integral a través de nuestro Staff de abogados especializados de acuerdo con su rubro de negocio.
                                    </p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>


            <div class="col-md-6 mb-4">
                <div class="card bg-white">
                    <div class="mb-3" >
                        <div class="row g-0">
                            <div class="col-md-4 padre">
                                <h4 class=" text-dark text-center ">Agilidad y eficiencia</h4>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text">Buscamos satisfacer rápidamente las necesidades de nuestros clientes, además de realizar procesos optimizados y soluciones efectivas
                                    </p>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>

            
        </div>
    </div>
</section>

<section class="bg-image text-dark my-1" style="background-image: url('{{ asset('assets/img/fondo.jpg')}}');">
    <!--Servicios-->
    <div class="container text-center pt-4">
        <h1>Servicios Legales</h1>
        <h4>Los servicios que brindamos de acuerdo a sus necesidades</h4>
    </div>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-md-4">
                <a href="{{ route('laboral') }}" style="text-decoration: none;">
                    <div class="blog" style="background-image: url('{{ asset('assets/img/derecho.jpg')}}');no-repeat;">
                        <div class="title-box">
                          <h3>
                          Derecho Laboral Privado
                          </h3>
                          <hr/>
                          <div class="intro">
                            Confía en nosotros para ser tus socios en la búsqueda de soluciones legales efectivas y justas. 
                          </div>
                        </div>  
                        <div class="info">
                          <span>Nuestra firma ofrece a sus clientes una amplia gama de servicios especializados en el ámbito laboral y de seguridad social.</span>
                      </div>
                      <div class="color-overlay"></div>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="{{ route('civil') }}" style="text-decoration: none;">
                    <div class="blog" style="background-image: url('{{ asset('assets/img/derecho2.jpg')}}');no-repeat;">
                        <div class="title-box">
                          <h3>
                          Derecho Civil y Comercial
                          </h3>
                          <hr/>
                          <div class="intro">
                            Confía en nosotros para ser tus socios en la búsqueda de soluciones legales efectivas y justas. 
                          </div>
                        </div>  
                        <div class="info">
                          <span>Nuestra firma brinda a nuestros clientes asesoría en temas relacionados a contratos, derechos reales y responsabilidad civil. </span>
                      </div>
                      <div class="color-overlay"></div>
                    </div>
                </a>
                
            </div>

            <div class="col-md-4">

                <a href="{{ route('administrativo') }}" style="text-decoration: none;">
                    <div class="blog" style="background-image: url('{{ asset('assets/img/derecho-7.jpg')}}');no-repeat;">
                        <div class="title-box">
                          <h3>
                          Derecho Administrativo
                          </h3>
                          <hr/>
                          <div class="intro">
                            Confía en nosotros para ser tus socios en la búsqueda de soluciones legales efectivas y justas. 
                          </div>
                        </div>  
                        <div class="info">
                          <span>Nuestra firma brinda servicios de asesoría en todo tipo de procedimientos administrativos ante las entidades de la administración pública.</span>
                      </div>
                      <div class="color-overlay"></div>
                    </div>
                </a>

            </div>
        </div>

        <div class="row separa pt-5 justify-content-center align-items-center">
            <div class="col-md-4">

                <a href="{{ route('ambiental') }}" style="text-decoration: none;">
                    <div class="blog" style="background-image: url('{{ asset('assets/img/derecho-6.jpg')}}');no-repeat;">
                        <div class="title-box">
                          <h3>
                          Derecho Ambiental
                          </h3>
                          <hr/>
                          <div class="intro">
                            Confía en nosotros para ser tus socios en la búsqueda de soluciones legales efectivas y justas. 
                          </div>
                        </div>  
                        <div class="info">
                          <span>Nuestra firma brinda asesoría en temas ambientales a empresas de los sectores económicos, como agroindustriales, industria, energía, minería, pesca, entre otras. </span>
                      </div>
                      <div class="color-overlay"></div>
                    </div>
                </a>

            </div>

            <div class="col-md-6">

                <a href="{{ route('constitucional') }}" style="text-decoration: none;">
                    <div class="blog" style="background-image: url('{{ asset('assets/img/derecho3.jpg')}}');no-repeat;">
                        <div class="title-box">
                          <h3>
                          Derecho Constitucional
                          </h3>
                          <hr/>
                          <div class="intro">
                            Confía en nosotros para ser tus socios en la búsqueda de soluciones legales efectivas y justas. 
                          </div>
                        </div>  
                        <div class="info">
                          <span>Nuestra firma brinda asesoría en procesos constitucionales, tales como Amparos , cumplimiento , habeas data.</span>
                      </div>
                      <div class="color-overlay"></div>
                    </div>
                </a>

            </div>

        </div>


    </div>
</section>


<section >
        <!--Clientes-->
        <div class="container text-center blanco p-5">
            <h1 c>Nuestros clientes</h1>
            <h4>Buscamos soluciones a grandes desafíos</h4>
        </div>

        
            <div class="pb-5">
                <div class="slider clientes">
                    <div class="slide-track">
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
                    </div>
                    <div class="slide">
                    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
                    </div>
                    </div>
                </div>
            </div>
        
        

</section>

@endsection

@section('styles') 
    <link rel="stylesheet" href="{{ asset('assets/css/index.css')}}">

@endsection
