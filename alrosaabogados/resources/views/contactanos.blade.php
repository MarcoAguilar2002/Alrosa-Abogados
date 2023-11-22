@extends('layouts.landing')

@section('content')
<section class="bg-image text-dark sec pb-2" style="background-image: url('{{ asset('assets/img/fondo7.jpg')}}'); background-repeat: no-repeat; background-size: cover; ">
    <div class="container text-center ">
            <h1 class=" p-3 subtitulos">Ubícanos en: </h1>

            <div class="grid">
                <div class="pt-2 ">
                    <h3 class="letras"><i class="fas fa-map-marker-alt icono-circular "></i></h3>
                    <p class="letras texto">DIRECCIÓN: CALLE MADRID 145, OFICINA 503, MIRAFLORES - LIMA</p>
                </div>
                    
                <div class="pt-2">
                    <h3 class="letras"><i class="fas fa-phone icono-circular "></i> </h3>
                    <p class="letras">TELÉFONO: +51907513450</p>
                </div>
                    
                <div class="pt-2">
                    <h3 class="letras "><i class="fas fa-envelope icono-circular "></i> </h3>
                    <p class="letras ">CORREO: @gmail.com</p>
                </div>
            </div>
    </div>
</section>

<section class="bg-image text-dark" style="background-image: url('{{ asset('assets/img/fondo4.jpg')}}'); background-size: cover; background-repeat: no-repeat; background-position: center center;">
    <div class="container">
        <div class="row mx-3">
            <div class="col-md-6 mb-0">
                <img src="{{ asset('assets/img/persona5.png')}}" alt="" class="img-fluid">
            </div>
            <div class="col-md-6 my-4 d-flex flex-column align-items-center pt-5 pl-auto">
                <div class="text-start">
                    <p class="font-weight-bold h3 d-inline mb-0">Dejanos tus datos</p>
                    <p class="h3 d-inline mb-0 ml-2">y te contactaremos</p>
                </div>
            
                <div class="container mt-4">
                        <form class="form" method="POST" action="{{route('registro')}}">
                            @csrf
                            <div class="row ">
                              <div class="col">
                                <input name="nombre" type="text" class="lbl-nombre form-control-lg" placeholder="Nombre">
                              </div>
                              <div class="col">
                                <input name="correo" type="email" class="lbl-nombre form-control-lg" placeholder="Correo Electronico">
                              </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col">
                                  <input name="numero" type="tel" class="lbl-nombre form-control-lg" placeholder="Telefono">
                                </div>
                                <div class="col">
                                  <input name="tipo_consulta" type="text" class="lbl-nombre form-control-lg" placeholder="Tipo de consulta">
                                </div>
                              </div>
                              <button type="submit" class="btn btn-nuestro mt-4 float-right btn-lg">Enviar</button>
                          </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('styles') 
    <link rel="stylesheet" href="{{asset('assets/css/contactanos.css')}}">
@endsection