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

	<!-- Page Heading/Breadcrumbs -->
	<div class="container">
		<div class="categoria-bread">
			<div class="row">
		        <div class="col-lg-12">
		            <ol class="breadcrumb">
		                <li><a href="index.php">Home</a></li>
		                <li class="active">Contacto</li>
		            </ol>
		        </div>
		    </div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="col-md-6">
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
				</div><!--CULMINA DIV DE CONTAINER FLUID-->
			</div>

			<div class="col-md-6">
				<div class="container">
					<div class="row">
				        <div class="col-md-4">
				        	<iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&source=s_q&hl=en&geocode=&q=15+Springfield+Way,+Hythe,+CT21+5SH&aq=t&sll=52.8382,-2.327815&sspn=8.047465,13.666992&ie=UTF8&hq=&hnear=15+Springfield+Way,+Hythe+CT21+5SH,+United+Kingdom&t=m&z=14&ll=51.077429,1.121722&output=embed"></iframe>
				    	</div>
				    	
				      	<div class="col-md-2">
				    		<h2>Dirección</h2>
				    		<address>
				    			<strong>Hythe Window Cleaning</strong><br>
				    			15 Springfield Way<br>
				    			Hythe<br>
				    			Kent<br>
				    			United Kingdon<br>
				    			CT21 5SH<br>
				    			<abbr title="Phone">P:</abbr> 01234 567 890
				    		</address>
				    	</div>
				    </div>
				</div><!--CULMINA DIV DE CONTAINER DE UNICACION-->
			</div>
		</div>

	</div><!--CULMINA DIV DE CONTAINER-->

	<br>


	<? include('footer.php'); ?>
        
	<? include('scripts.php'); ?>