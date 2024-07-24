 
@extends('layout')

@section('title', 'Servicio | ' . $servicio->titulo)

@section('content')
<h1>{{ $servicio->titulo }}</h1>
<h2>{{ $servicio->description }}</h2>
<h3>{{ $servicio->created_at->diffForHumans() }}</h3>

<tr>
    <td colspan="2">{{ $servicio->titulo }}
    <a href="{{ route('servicios.edit',$servicio) }}">Editar</a>
    </td>
    <td>
    </td colspan="2">
        <form action="{{ route('servicios.destroy',$servicio) }}" method="POST">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    </td>
</tr>

@endsection
