<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Web-Site</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	 <!--PARA VISUALIZAR EN DISPOSITIVOS MOVILES -->
	<? include('links.php'); ?>
</head>
<body>

	<? include('header.php'); ?>


	<div class="container">
		<div class="container-fluid">
			<form action="" class="">
				<div class="form-group">
					<label for="nombres"><h3 class="text-info">Nombres</h3></label>
					<input class="form-control" type="text" id="nombres" placeholder="Nombres">
				</div>

				<div class="form-group">
					<label for="apellidos"><h3 class="text-info">Apellidos</h3></label>
					<input class="form-control" type="text" id="apellidos" placeholder="Apellidos">
				</div>
				
				<div class="form-group">
					<label for="nombre"><h3 class="text-info">Email</h3></label>
					<input class="form-control" type="text" id="correo" placeholder="Email">
				</div>
			
				<div class="form-group">
					<label for="nombre"><h3 class="text-info">Mensaje</h3></label>
					<textarea class="form-control" name="" id="mensaje" cols="30" rows="10"></textarea>
				</div>
			
					
				<button class="btn btn-primary">Enviar</button>
			
			</form>
		</div>
	</div>
	<br>


	<? include('footer.php'); ?>
        
	<? include('scripts.php'); ?>