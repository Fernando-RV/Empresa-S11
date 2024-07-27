@extends('layout')

@section('title', 'Crear Persona')

@section('content')

<h2 style="text-align: center; margin-bottom: 20px;">Crear nueva persona</h2>

<form action="{{ route('personas.store') }}" method="post" style="max-width: 600px; margin: 0 auto;">
    @csrf

    <div style="display: flex; flex-direction: column; gap: 15px;">
        <div style="display: flex; flex-direction: column;">
            <label for="cPerApellido" style="margin-bottom: 5px;">Nombre</label>
            <input type="text" name="cPerApellido" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('cPerApellido'))
                <span style="color: red;">{{ $errors->first('cPerApellido') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="cPerNombre" style="margin-bottom: 5px;">Apellido</label>
            <input type="text" name="cPerNombre" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('cPerNombre'))
                <span style="color: red;">{{ $errors->first('cPerNombre') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="cPerDireccion" style="margin-bottom: 5px;">Dirección</label>
            <input type="text" name="cPerDireccion" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('cPerDireccion'))
                <span style="color: red;">{{ $errors->first('cPerDireccion') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="dPerFecNac" style="margin-bottom: 5px;">Fecha de Nacimiento</label>
            <input type="date" name="dPerFecNac" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('dPerFecNac'))
                <span style="color: red;">{{ $errors->first('dPerFecNac') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="nPerEdad" style="margin-bottom: 5px;">Edad</label>
            <input type="number" name="nPerEdad" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('nPerEdad'))
                <span style="color: red;">{{ $errors->first('nPerEdad') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="cPerSexo" style="margin-bottom: 5px;">Sexo</label>
            <select name="cPerSexo" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
            </select>
            @if($errors->has('cPerSexo'))
                <span style="color: red;">{{ $errors->first('cPerSexo') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="nPerSueldo" style="margin-bottom: 5px;">Sueldo</label>
            <input type="number" name="nPerSueldo" step="0.01" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('nPerSueldo'))
                <span style="color: red;">{{ $errors->first('nPerSueldo') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="cPerRnd" style="margin-bottom: 5px;">RND</label>
            <input type="text" name="cPerRnd" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('cPerRnd'))
                <span style="color: red;">{{ $errors->first('cPerRnd') }}</span>
            @endif
        </div>

        <div style="display: flex; flex-direction: column;">
            <label for="nPerEstado" style="margin-bottom: 5px;">Estado</label>
            <input type="text" name="nPerEstado" style="padding: 8px; border-radius: 5px; border: 1px solid #ccc;">
            @if($errors->has('nPerEstado'))
                <span style="color: red;">{{ $errors->first('nPerEstado') }}</span>
            @endif
        </div>

        <div style="display: flex; justify-content: center; margin-top: 20px;">
            <button type="submit" style="padding: 10px 20px; border: none; border-radius: 5px; background-color: #4CAF50; color: white; cursor: pointer;">Guardar</button>
        </div>
    </div>
</form>

@endsection