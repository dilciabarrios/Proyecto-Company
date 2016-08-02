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
	                                <li class="active"><a href="servicios.php">Servicios</a></li>
	                                <li><a href="especialidades.php">Especialidades</a></li>
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
			                <li class="active">Servicios</li>
			            </ol>
			        </div>
			    </div>
			</div>
		</div>
		
		<div class="container">
			<!-- Service Panels -->
			<div class="row">
	            <div class="col-lg-12">
	            </div>
		            <div class="col-md-4 col-sm-4">
		                <div class="panel panel-default text-center">
		                    <div class="panel-heading">
		                        <span class="fa-stack fa-5x">
		                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
		                              <i class="fa fa-tree fa-stack-1x fa-inverse"></i>
		                        </span>
		                    </div>
		                    <div class="panel-body">
		                        <h4>Service One</h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		                        <a href="#" class="btn btn-primary">Learn More</a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-4 col-sm-4">
		                <div class="panel panel-default text-center">
		                    <div class="panel-heading">
		                        <span class="fa-stack fa-5x">
		                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
		                              <i class="fa fa-car fa-stack-1x fa-inverse"></i>
		                        </span>
		                    </div>
		                    <div class="panel-body">
		                        <h4>Service Two</h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		                        <a href="#" class="btn btn-primary">Learn More</a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-md-4 col-sm-4">
		                <div class="panel panel-default text-center">
		                    <div class="panel-heading">
		                        <span class="fa-stack fa-5x">
		                              <i class="fa fa-circle fa-stack-2x text-primary"></i>
		                              <i class="fa fa-support fa-stack-1x fa-inverse"></i>
		                        </span>
		                    </div>
		                    <div class="panel-body">
		                        <h4>Service Three</h4>
		                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
		                        <a href="#" class="btn btn-primary">Learn More</a>
		                    </div>
		                </div>
		            </div>
	        </div><!-- DIV Panels -->
			<!-- Service Tabs -->
	        <div class="row">
	            <div class="col-lg-12">
	                <h2 class="page-header">Service Tabs</h2>
	            </div>
	            <div class="col-lg-12">

	                <ul id="myTab" class="nav nav-tabs nav-justified">
	                    <li class="active"><a href="#service-one" data-toggle="tab"><i class="fa fa-tree"></i> Service One</a>
	                    </li>
	                    <li class=""><a href="#service-two" data-toggle="tab"><i class="fa fa-car"></i> Service Two</a>
	                    </li>
	                    <li class=""><a href="#service-three" data-toggle="tab"><i class="fa fa-support"></i> Service Three</a>
	                    </li>
	                </ul>

	                <div id="myTabContent" class="tab-content">
	                    <div class="tab-pane fade text-justify active in" id="service-one">
	                        <h4>Service One</h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
	                    </div>
	                    <div class="tab-pane fade text-justify" id="service-two">
	                        <h4>Service Two</h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
	                    </div>
	                    <div class="tab-pane fade text-justify" id="service-three">
	                        <h4>Service Three</h4>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
	                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae repudiandae fugiat illo cupiditate excepturi esse officiis consectetur, laudantium qui voluptatem. Ad necessitatibus velit, accusantium expedita debitis impedit rerum totam id. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus quibusdam recusandae illum, nesciunt, architecto, saepe facere, voluptas eum incidunt dolores magni itaque autem neque velit in. At quia quaerat asperiores.</p>
	                    </div>
	                </div>
	            </div>
	        </div><!-- DIV Service Tabs -->

		</div>
	
	</section>

	<br>


	<? include('footer.php'); ?>
        
	<? include('scripts.php'); ?>