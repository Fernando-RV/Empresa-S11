@extends('layout')

@section('title', 'Personas')

@section('content')
  <div class="container my-5">
    <h1 class="text-center" style="color: #000000;">Personas</h1>
    <div class="text-center my-4">
      <a href="{{ route('personas.create') }}" class="btn btn-primary" style="color: #ffffff; background-color: #3498db; border-color: #3498db;">Nueva Persona</a>
    </div>
    <div class="row">
      @if($personas)
        @foreach($personas as $persona)
          <div class="col-md-3">
            <div class="card mb-4" style="border: 1px solid #3498db;">
              <div class="card-body text-center" style="background-color: #ecf0f1;">
                <h5 class="card-title" style="color: #000000;">{{ $persona->cPerNombre }} {{ $persona->cPerApellido }}</h5>
                <a href="{{ route('personas.show', $persona->nPerCodigo) }}" class="btn btn-outline-primary" style="color: #000000; border-color: #3498db;">Ver detalles</a>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <p class="text-center" style="color: #000000;">No hay Personas disponibles</p>
      @endif
    </div>
  </div>
@endsection