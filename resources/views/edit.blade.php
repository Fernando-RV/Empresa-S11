@extends('layout')

@section('title','Editar Persona | ' . $persona->cPerApellido )

@section('content')
<table cellpadding="3" cellspacing="5">
<tr>
    <th colspan="4">Editar Persona</th>
</tr>

<form action="{{ route('personas.update', $persona) }}" method="post">
    @csrf @method('PATCH')
    
    <tr>
        <th>Apellido</th>
        <td><input type="text" name="cPerApellido" value="{{ old('cPerApellido', $persona->cPerApellido) }}"></td>
    </tr>

    <tr>
        <th>Nombre</th>
        <td><input type="text" name="cPerNombre" value="{{ old('cPerNombre', $persona->cPerNombre) }}"></td>
    </tr>
    
    <tr>
        <th>Dirección</th>
        <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}"></td>
    </tr>

    <tr>
        <th>Fecha de Nacimiento</th>
        <td><input type="date" name="dPerFecNac" value="{{ old('dPerFecNac',$persona->dPerFecNac) }}" class="border p-2 mb-2"></td>
    </tr>

    <tr>
        <th>Edad</th>
        <td><input type="text" name="nPerEdad" value="{{ old('nPerEdad', $persona->nPerEdad) }}"></td>
    </tr>

    <tr>
        <th>Sexo</th>
        <td><input type="text" name="cPerSexo" value="{{ old('cPerSexo', $persona->cPerSexo) }}"></td>
    </tr>

    <tr>
        <th>Sueldo</th>
        <td><input type="text" name="nPerSueldo" value="{{ old('nPerSueldo', $persona->nPerSueldo) }}"></td>
    </tr>

    <tr>
        <th>RND</th>
        <td><input type="text" name="cPerRnd" value="{{ old('cPerRnd', $persona->cPerRnd) }}"></td>
    </tr>

    <tr>
        <th>Estado</th>
        <td><input type="text" name="nPerEstado" value="{{ old('nPerEstado', $persona->nPerEstado) }}"></td>
    </tr>

    <tr>
        <td colspan="2" class="text-right">
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </tr>

</form>

@endsection
