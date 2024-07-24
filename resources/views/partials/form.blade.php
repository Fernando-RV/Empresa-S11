@csrf
<tr>
    <th>Título</th>
    <td><input type="text" name="titulo" value="{{ old('titulo',$servicio->titulo) }}"></td>
</tr>
<tr>
    <th>Descripción</th>
    <td><input type="text" name="description" value="{{ old('description',$servicio->description) }}"></td>
</tr>
<tr>
    <td colspan="2" align="center"><button>{{ $btnText }}</button></td>
</tr>