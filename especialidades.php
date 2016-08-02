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

	<div class="navbar-wrapper"> 
	    <div class="container-fluid">
	        <nav class="navbar navbar-fixed-top">
	            <div class="container">

	                <div class="navbar-header">
	                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    </button>

	                </div><!-- CULMINA DIV DE NAVBAR-HEADER-->

	                <div id="navbar" class="navbar-collapse collapse">
	                    <ul class="nav navbar-nav">
	                        <li class=""><a href="index.php" class="">Home</a></li>
	                        <li class=""><a href="index.php" class="">Quienes Somos</a></li>
	                       	<li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
	                            <ul class="dropdown-menu">
	                                <li><a href="areas.php">Areas de Trabajo</a></li>
	                                <li><a href="servicios.php">Servicios</a></li>
	                                <li class="active"><a href="especialidades.php">Especialidades</a></li>
	                            </ul>
	                        </li>
	                        <li><a href="contacto.php">Contacto</a></li>
	                    </ul>
	                    <ul class="nav navbar-nav pull-right">
	                        <li class=""><a href="#"></a></li>
	                        <li class=""><a href="#"></a></li>
	                    </ul>
	                </div><!-- CULMINA DIV DE NAVBAR -->
	            </div><!-- CULMINA DIV DE CONTAINER -->
	        </nav><!-- CULMINA NAVBAR-FIXED-TOP  -->
	    </div><!-- CULMINA DIV CONTAINER-FLUID -->
	</div> <!-- CULMINA DIV NAVBAR-WRAPPER  -->

	<br>
	
	<section class="project">
		<!-- Page Heading/Breadcrumbs -->
		<div class="container">
			<div class="categoria-bread">
				<div class="row">
			        <div class="col-lg-12">
			            <ol class="breadcrumb">
			                <li><a href="index.php">Home</a></li>
			                <li class="active">Especialidades</li>
			            </ol>
			        </div>
			    </div>
			</div>
		</div>
	</section>

	<section class="espec1">
		<div class="container">
			<div class="col-lg-12">
	        </div>
		    <!-- NUEVO ROW 1-->
		    <div class="row grid-divider">
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Estatigrafia por secuencia</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita incidunt rerum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Geologia Estructural</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate placeat suscipit maxime tenetur officiis asperiores quae molestias fugiat praesentium dolorum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Interpretacion Sismica</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta.</p>
		      </div>
		    </div>
		    </div><!-- CULMINA ROW 1-->
		</div><!-- CULMINA CONTAINER-->
	</section>
	
	<section class="espec2">
		<div class="container">
		    <!-- NUEVO ROW 1-->
		    <div class="row grid-divider">
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Quimoestratigrafia</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita incidunt rerum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Geoquimica Organica</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate placeat suscipit maxime tenetur officiis asperiores quae molestias fugiat praesentium dolorum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Biomarcadores</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta.</p>
		      </div>
		    </div>
		    </div><!-- CULMINA ROW 1-->
		</div><!-- CULMINA CONTAINER-->
	</section>

	<section class="espec3">
		<div class="container">
		    <!-- NUEVO ROW 1-->
		    <div class="row grid-divider">
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Trazadores Geoquimicos</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita incidunt rerum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Petrofisica</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate placeat suscipit maxime tenetur officiis asperiores quae molestias fugiat praesentium dolorum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Sedimentologia</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta.</p>
		      </div>
		    </div>
		    </div><!-- CULMINA ROW 1-->
		</div><!-- CULMINA CONTAINER-->
	</section>

	<section class="espec4">
		<div class="container">
		    <!-- NUEVO ROW 1-->
		    <div class="row grid-divider">
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Analisis de Cuencas</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita incidunt rerum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Ingeneria de Yacimientos</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate placeat suscipit maxime tenetur officiis asperiores quae molestias fugiat praesentium dolorum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Geoestadistica</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta.</p>
		      </div>
		    </div>
		    </div><!-- CULMINA ROW 1-->
		</div><!-- CULMINA CONTAINER-->
	</section>
	
	<section class="espec5">
		<div class="container">
		    <!-- NUEVO ROW 1-->
		    <div class="row grid-divider">
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Geomecanica</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima expedita incidunt rerum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Ingeneria de Perforacion</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate placeat suscipit maxime tenetur officiis asperiores quae molestias fugiat praesentium dolorum.</p>
		      </div>
		    </div>
		    <div class="col-sm-4">
		      <div class="col-padding">
		        <h3>Geologia, Geofidica y Geoquimica de Acuiferos</h3>
		        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta, sunt rerum corporis. Ab veniam aperiam numquam cupiditate maiores repudiandae ea dicta.</p>
		      </div>
		    </div>
		    </div><!-- CULMINA ROW 1-->
		</div><!-- CULMINA CONTAINER-->
	</section>



	<br>


	<? include('footer.php'); ?>
        
	<? include('scripts.php'); ?>