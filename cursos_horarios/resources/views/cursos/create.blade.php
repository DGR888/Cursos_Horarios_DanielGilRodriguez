Formulario de creacion de cursos
<form action="{{ url('/cursos') }}" method="post" enctype="multipart/form-data">
@csrf

<label for="cod_idioma">cod_idioma</label>
<input type="number" name="cod_idioma" id="cod_idioma">
<br>

<label for="nro_sala_online">nro_sala_online</label>
<input type="number" name="nro_sala_online" id="nro_sala_online">
<br>

<label for="cod_profesor">cod_profesor</label>
<input type="number" name="cod_profesor" id="cod_profesor">
<br>

<label for="id_horario"> id_horario</label>
<input type="number" name="id_horario" id="id_horario">
<br>

<label for="cod_ciclo"> cod_ciclo</label>
<input type="number" name="cod_ciclo" id="cod_ciclo">
<br>

<label for="nombre"> nombre</label>
<input type="text" name="nombre" id="nombre">
<br>

<label for="direccion"> direccion</label>
<input type="text" name="direccion" id="direccion">
<br>


<input type="submit" value="Guardar datos">
<br></form>