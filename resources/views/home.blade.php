@extends('layout')

@section('title', 'Inicio')

@section('contenido')
<div class="container">
    <div class="row">

        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">@lang('Inicio')</h1>
            <p class="lead text-secondary">Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Ut eaque nesciunt laboriosam in mollitia temporibus recusandae deleniti perferendis corporis 
            aspernatur cumque eligendi accusamus fugiat quam voluptatibus unde quis, incidunt quas.</p>
            <a class="btn btn-lg btn-block btn-primary" href="{{ route('contacto') }}">Información</a>
        </div>

        <div class="col-12 col-lg-6">
            <!-- <img class="img-fluid mb-3" src="/img/logo.svg" alt="Galaxia del Videojuego">*Cambiar la imagen en GIMP -->
            <img class="img-fluid" src="/img/dream.svg" alt="Galaxia del Videojuego">
        </div>

    </div>
</div>

@endsection