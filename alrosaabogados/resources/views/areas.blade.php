@extends('layouts.landing')


@section('content')
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
@endsection

@section('styles') 
    <link rel="stylesheet" href="{{asset('assets/css/servicios.css')}}">
@endsection
