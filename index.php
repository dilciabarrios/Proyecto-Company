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
	<br>
    <!-- Page Heading/Breadcrumbs -->
	<div class="container">
		<div class="categoria-bread">
			<div class="row">
		        <div class="col-lg-12">
		            <ol class="breadcrumb">
		                <li><a href="index.php">Home/</a></li>
		        
		            </ol>
		        </div>
		    </div>
		</div>
	</div>


	<div class="container">
	    <div class="row">
	        <!-- The carousel -->
	        <div id="transition-timer-carousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
	            <!-- Indicators -->
	            <ol class="carousel-indicators">
	                <li data-target="#transition-timer-carousel" data-slide-to="0" class="active"></li>
	                <li data-target="#transition-timer-carousel" data-slide-to="1"></li>
	                <li data-target="#transition-timer-carousel" data-slide-to="2"></li>
	            </ol>

	            <!-- Wrapper for slides -->
	            <div class="carousel-inner">
	                <div class="item active">
	                    <img src="img/construccion2.jpg" />
	                    <div class="carousel-caption">
	                        <h1 class="carousel-caption-header">Slide 1</h1>
	                        <p class="carousel-caption-text hidden-sm hidden-xs">
	                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
	                        </p>
	                    </div>
	                </div>
	                
	                <div class="item">
	                    <img src="img/construccion2.jpg" />
	                    <div class="carousel-caption">
	                        <h1 class="carousel-caption-header">Slide 2</h1>
	                        <p class="carousel-caption-text hidden-sm hidden-xs">
	                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
	                        </p>
	                    </div>
	                </div>
	                
	                <div class="item">
	                    <img src="img/construccion2.jpg" />
	                    <div class="carousel-caption">
	                        <h1 class="carousel-caption-header">Slide 3</h1>
	                        <p class="carousel-caption-text hidden-sm hidden-xs">
	                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse dignissim aliquet rutrum. Praesent vitae ante in nisi condimentum egestas. Aliquam.
	                        </p>
	                    </div>
	                </div>
	            </div>

	            <!-- Controls -->
	            <a class="left carousel-control" href="#transition-timer-carousel" data-slide="prev">
	                <span class="glyphicon glyphicon-chevron-left"></span>
	            </a>
	            <a class="right carousel-control" href="#transition-timer-carousel" data-slide="next">
	                <span class="glyphicon glyphicon-chevron-right"></span>
	            </a>
	            
	            <!-- Timer "progress bar" -->
	            <hr class="transition-timer-carousel-progress-bar animate" />
	        </div>
	    </div>
	</div><!--CULMINA DIV CONTAINER DE SLIDESHOW-->
	
	<br>

	<section class="container">
		<div class="container-secciones">
			<div class="row">
				<div class="blog clearfix">
					<div class="row">
						<div class="col-xs-12 col-md-4">
							<div class="thumbnail">
								<img src="img/img1.jpg" width="400px" height="200px" alt="">

								<div class="caption">
									<h3 class="text-primary"><span class="glyphicon glyphicon-info-sign"></span>Home</h3>
									<p>Esta imagen fue diseno de falcon master visita su web para mas informacion</p>
									<a href="#" class="btn btn-primary">Ver más</a>
									
								</div><!--CULMINA EL CAPTION-->
							</div><!--CULMINA EL THUMBNAIL-->
							
						</div><!--CULMINA EL col-xs-6 col-md-3-->

						<div class="col-xs-12 col-md-4">
							<div class="thumbnail">
								<img src="img/img5.jpg" width="400px" height="200px" alt="">

								<div class="caption">
									<h3 class="text-primary"><span class="glyphicon glyphicon-info-sign"></span>Quienes Somos</h3>
									<p>Esta imagen fue diseno de falcon master visita su web para mas informacion</p>
									<a href="#" class="btn btn-primary">Ver más</a>
								
								</div><!--CULMINA EL CAPTION-->
							</div><!--CULMINA EL THUMBNAIL-->
							
						</div><!--CULMINA EL col-xs-6 col-md-3-->

						<div class="col-xs-12 col-md-4">
							<div class="thumbnail">
								<img src="img/img2.jpg" width="400px" height="200px" alt="">

								<div class="caption">
									<h3 class="text-primary"><span class="glyphicon glyphicon-info-sign"></span>Areas de Trabajo</h3>
									<p>Esta imagen fue diseno de falcon master visita su web para mas informacion</p>
									<a href="areas.php" class="btn btn-primary">Ver más</a>
									
								</div><!--CULMINA EL CAPTION-->
							</div><!--CULMINA EL THUMBNAIL-->
							
						</div><!--CULMINA EL col-xs-6 col-md-3-->

				    </div><!--CULMINA EL ROW PRIMERO-->

				    <div class="row">
						<div class="col-xs-12 col-md-4">
							<div class="thumbnail">
								<img src="img/img1.jpg" width="400px" height="200px" alt="">

								<div class="caption">
									<h3 class="text-primary"><span class="glyphicon glyphicon-info-sign"></span>Servicios</h3>
									<p>Esta imagen fue diseno de falcon master visita su web para mas informacion</p>
									<a href="servicios.php" class="btn btn-primary">Ver más</a>
									
								</div><!--CULMINA EL CAPTION-->
							</div><!--CULMINA EL THUMBNAIL-->
							
						</div><!--CULMINA EL col-xs-6 col-md-3-->

						<div class="col-xs-12 col-md-4">
							<div class="thumbnail">
								<img src="img/img5.jpg" width="400px" height="200px" alt="">

								<div class="caption">
									<h3 class="text-primary"><span class="glyphicon glyphicon-info-sign"></span>Especialidades</h3>
									<p>Esta imagen fue diseno de falcon master visita su web para mas informacion</p>
									<a href="especialidades.php" class="btn btn-primary">Ver más</a>
								
								</div><!--CULMINA EL CAPTION-->
							</div><!--CULMINA EL THUMBNAIL-->
							
						</div><!--CULMINA EL col-xs-6 col-md-3-->

						<div class="col-xs-12 col-md-4">
							<div class="thumbnail">
								<img src="img/img2.jpg" width="400px" height="200px" alt="">

								<div class="caption">
									<h3 class="text-primary"><span class="glyphicon glyphicon-info-sign"></span>Contacto</h3>
									<p>Esta imagen fue diseno de falcon master visita su web para mas informacion</p>
									<a href="contacto.php" class="btn btn-primary">Ver más</a>
									
								</div><!--CULMINA EL CAPTION-->
							</div><!--CULMINA EL THUMBNAIL-->
							
						</div><!--CULMINA EL col-xs-6 col-md-3-->

				    </div><!--CULMINA EL ROW SEGUNDO-->

				</div><!--CULMINA SECTION BLOG-->
		</div>
	</section><!--CULMINA PRIMER SECTION-->
	
	<div class="galery">
			<div class="container">
				<h3>Projects Gallery</h3>
				<div class="row">
					<div class="span12">
			    	    <div class="well"> 
			                <div id="myCarousel" class="carousel slide transition-timer-carousel" data-ride="carousel">
			                 
			                <ol class="carousel-indicators">
			                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			                    <li data-target="#myCarousel" data-slide-to="1"></li>
			                    <li data-target="#myCarousel" data-slide-to="2"></li>
			                </ol>
			                 
			                <!-- Carousel items -->
			                <div class="carousel-inner">
			                    
			                    <div class="item active">
			                    	<div class="row-fluid">
			                            <div class="col-md-3 col-sm-6">
			                    	       <div class="span3"><a href="#x" class="thumbnail"><img src="img/construccion.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                    	        <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/catastrofe.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/construccion.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/catastrofe.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            
			                    	</div><!--/row-fluid-->
			                    </div><!--/item-->
			                     
			                 	<div class="item">
			                    	<div class="row-fluid">
			                            <div class="col-md-3 col-sm-6">
			                    	       <div class="span3"><a href="#x" class="thumbnail"><img src="img/construccion.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                    	        <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/catastrofe.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/construccion.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/catastrofe.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            
			                    	</div><!--/row-fluid-->
			                    </div><!--/item-->
			                     
			                    <div class="item">
			                    	<div class="row-fluid">
			                            <div class="col-md-3 col-sm-6">
			                    	       <div class="span3"><a href="#x" class="thumbnail"><img src="img/construccion.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                    	        <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/catastrofe.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/construccion.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            <div class="col-md-3 col-sm-6">
			                               <div class="span3"><a href="#x" class="thumbnail"><img src="img/catastrofe.jpg" alt="Image" style="max-width:100%;" /></a></div>
			                               <div class="person-text rel">
				                                <h4 class="color-c"><span class="glyphicon glyphicon-pushpin"></span><a title="" href="#">Control Room</a></h4>
				                            </div>
			                            </div>
			                            
			                    	</div><!--/row-fluid-->
			                    </div><!--/item-->
			                 
			                </div><!--/carousel-inner-->
			                 
				            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				                <span class="glyphicon glyphicon-chevron-left"></span>
				            </a>
				            <a class="right carousel-control" href="#myCarousel" data-slide="next">
				                <span class="glyphicon glyphicon-chevron-right"></span>
				            </a>
			                </div><!--/myCarousel-->
			                 
			            </div><!--/well-->   
					</div>
				</div>
			</div>
	</div><!--CULMINA DIV DE GALERIA SECTION GALERIA-->

	
	<br>

	<? include('footer.php'); ?>

	<? include('scripts.php'); ?>