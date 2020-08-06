@extends('layout')

@section('title', 'Contacto')

@section('contenido')

    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-6 mx-auto">
                
                <form class="bg-white shadow rounded py-3 px-4">
                    @csrf
                    <h1 class="display-4">@lang('Contacto')</h1>
                    <hr>
                    

                </form>   
            </div> <!-- Class -->
        </div> <!-- Row -->
    </div> <!-- Container -->
    
@endsection