Mostrar la lista de cursos
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Direccion</th>
            <th>cod_idioma_</th>
            <th>nro_sala_online</th>
            <th>cod_profesor</th>
            <th>id_horario</th>
            <th>cod_ciclo</th>
            
        </tr>
    </thead>
    <tbody>
    @foreach($cursos as $cursos)
        <tr>
            <td>{{ $cursos->id }}</td>
            <td>{{ $cursos->nombre }}</td>
            <td>{{ $cursos->direccion }}</td>
            <td>{{ $cursos->cod_idioma }}</td>
            <td>{{ $cursos->nro_sala_online }}</td>
            <td>{{ $cursos->cod_profesor }}</td>
            <td>{{ $cursos->id_horario }}</td>
            <td>{{ $cursos->cod_ciclo }}</td>
            <td>Editar | Borrar</td>
    @endforeach
        </tr>
    </tbody>
</table>