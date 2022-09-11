<?php 
	// $conexion = mysqli_connect('localhost','root','','aviat');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Formulario de medicos</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

</head>
<style>
	:root{
	--color0: #a8d44a;
	--color1: #50d8af;
	--color2: #1b4360;
	}
	*{margin: 0;padding: 0;font-family: 'Open Sans';}
	body{display: flex;justify-content: center;align-items: center;height: 100vh;background: var(--color2);}
	form{background: #fff;padding: 2em;display: flex;flex-direction: column;min-height: 350px;width: 400px;gap: 2em}
	form .formSep{display: flex;flex-direction: column;align-items: flex-start;}
	form .formSep input,form .formSep select{border: none;border-bottom: solid 2px var(--color2);padding: 5px;border-radius: 5px;outline: none;transition: all .2s  ease;width: 100%;}
	form .formSep input:focus,form .formSep select:focus{
		border-bottom-color: var(--color1);box-shadow:inset 0 -32px 0  var(--color1);color: white;
	}
	label{color: var(--color2);}
	select option{background: var(--color1);}
	select option:hover{background: var(--color2);}
	input[type="submit"]{height:50px;background: var(--color2);color: white;font-weight: bold;letter-spacing: 3px;}
	input[type="submit"]:hover{border-bottom-color: var(--color2);box-shadow:inset 0 -50px 0  var(--color1);}
	h1{font-family: Montserrat;position: relative;color: var(--color2);}
	h1::before{content:"";height: 3px;position: absolute;width: 50px;background: var(--color1);left: 0;bottom: -10px;}
</style>
<body>
	<form action="procesado.php" method="get">
		<h1>Subida de medicos</h1>
		<div class="formSep">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo" id="titulo" placeholder="Dr. Dra. o Bioq." required>
		</div>
		<div class="formSep">
			<label for="nombre">Nombre completo:</label>
			<input type="text" name="nombre" id="nombre" placeholder="Nombre completo" required>
		</div>
		<div class="formSep">
			<label for="especialidad">Especialidad:</label>
			<input type="text" name="especialidad" id="especialidad" placeholder="maximo 150 caracteres" required>
		</div>
		<div class="formSep">
		<label for="filter">Selecciona el filtro:</label>
			<select name="filter" id="filter">
				<option >Cardiología</option>
				<option >Neurología</option>
				<option >Farmaceutica</option>
			</select>
		</div>
		<div class="formSep">
			<label for="imagen">Nombre de la imagen</label>
			<input type="text" name="imagen" id="imagen" placeholder="img sin extension" required>
		</div>
		<div class="formSep">
			<input type="submit" id="submit">
		</div>
		<a href="index.php">Llevame al index</a>
	</form>
</body>
</html>