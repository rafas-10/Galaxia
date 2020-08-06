@extends('admin.master')

@section('title', 'Galeria')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/galeria') }}"><i class="fas fa-images"></i> Galería</a>
    </li>
@endsection
@section('contenido')
    <div class="container-fluid">
        <div class="panel shadow">
            <div class="header">
                <h2 class="title"><i class="fas fa-images"></i> Galería</h2>
            </div><!-- Header -->

            <div>
                <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
            </div>

        </div><!-- Panel shadow -->
    </div><!-- container fluid -->
@endsection