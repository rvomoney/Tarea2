<?php 
	
	if ($_POST) {
		$persona= $_POST;
		core_persona::guardar($persona);
		redirect('main/nuevo');
	}
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario</title>
</head>
<body>

	<h3>Formulario de estudiante</h3>
	<form method="post" action="">

		<?= asgInput('cedula', 'Cedula',['required'=>'required']); ?> <br>
		<?= asgInput('nombre', 'Nombre',['required'=>'required']); ?> <br>
		<?= asgInput('apellido', 'Apellido',['required'=>'required']); ?> 
		<p>Tipo de sangre:</p>
		<select required name="sangre"> 
			<option value="A Positivo">A Positivo</option>
			<option value="A Negativo">A Negativo</option>
			<option value="B Positivo">B Positivo</option>
			<option value="B Negativo">B Negativo</option>
			<option value="O Positivo">O Positivo</option>
			<option value="O Negativo">O Negativo</option>
			<option value="AB Positivo">AB Positivo</option>
			<option value="AB Negativo">AB Negativo</option>
		</select>
		
		<p>Genero:</p>
		<input required type="radio" name="genero" value="masculino">Hombre
		<input required type="radio" name="genero" value="femenino">Mujer
		<br><br>
		<?= asgInput('comentario', 'Comentario',['required'=>'required']); ?> <br>

		<input required type="checkbox" value="Acepto">Acepto enviar mis datos<br> <br>

		<div>
			<button type="submit">Guardar</button>
		</div>

	</form>

	<hr>

	<h3>Intentos anteriores</h3>

	<table>
		<thead>
			<tr>
				<th>Cedula</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Tipo de sangre</th>
				<th>Genero</th>
				<th>Comentario</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$rs = core_persona::listado();
				foreach($rs as $persona){
					$urlBorrar = base_url ("index.php/main/borrar/{$persona->id}");
					echo"
					<tr>
					<td>{$persona->cedula}</td>
					<td>{$persona->nombre}</td>
					<td>{$persona->apellido}</td>
					<td>{$persona->sangre}</td>
					<td>{$persona->genero}</td>
					<td>{$persona->comentario}</td>
					</tr>";
				}
			?>
		</tbody>   
	</table>
	
</body>
</html>