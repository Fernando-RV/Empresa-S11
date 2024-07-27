@csrf
<tr>
    <th>Dirección</th>
    <td><input type="text" name="cPerDireccion" value="{{ old('cPerDireccion', $persona->cPerDireccion) }}"></td>
</tr>
<tr>
    <th>Fecha de Nacimiento</th>
    <td><input type="text" name="dPerFecNac" value="{{ old('dPerFecNac', $persona->dPerFecNac) }}"></td>
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
    <td colspan="2" align="center"><button>{{ $btnText }}</button></td>
</tr>