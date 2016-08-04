	<?php ?>
    <div class="navbar-wrapper"> 
        <nav class="navbar navbar-static-top">
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
                        <li <? if(!isset($_GET['menu'])) {echo 'class="active"';} ?>>
                        <a href="index.php">Inicio</a>
                        </li>
                        <li <? if(isset($_GET['menu']) && $_GET['menu']=="quienes_somos") {echo 'class="active"';} ?>>
                        <a href="index.php?menu=quienes_somos">Quienes Somos</a>
                        </li>
                        <li class="<? if(isset($_GET['menu']) && $_GET['menu']=='areas_de_trabajo') {echo 'active';} ?> dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Areas de Trabajo<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                <a href="index.php?menu=areas_de_trabajo">Area de Trabajo 1</a>
                                </li>
                                <li >
                                <a href="index.php?menu=areas_de_trabajo">Area de Trabajo 2</a>
                                </li>
                                <li>
                                <a href="index.php?menu=areas_de_trabajo">Area de Trabajo 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<? if(isset($_GET['menu']) && $_GET['menu']=='servicios') {echo 'active';} ?> dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Servicios <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li>
                                <a href="index.php?menu=servicios">Servicio 1</a>
                                </li>
                                <li >
                                <a href="index.php?menu=servicios">Servicio 2</a>
                                </li>
                                <li>
                                <a href="index.php?menu=servicios">Servicio 3</a>
                                </li>
                            </ul>
                        </li>
                        <li class="<? if(isset($_GET['menu']) && $_GET['menu']=='especialidades') {echo 'active';} ?> dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Especialidades <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                <a href="index.php?menu=especialidades">Especialidad 1</a>
                                </li>
                                <li>
                                <a href="index.php?menu=especialidades">Especialidad 2</a>
                                </li>
                                <li>
                                <a href="index.php?menu=especialidades">Especialidad 3</a>
                                </li>
                            </ul>
                        </li>
                        <li <? if(isset($_GET['menu']) && $_GET['menu']=="contacto") {echo 'class="active"';} ?>>
                        <a href="index.php?menu=contacto">Contacto</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
        
                    </ul>
                </div><!-- CULMINA DIV DE NAVBAR -->
            </div><!-- CULMINA DIV DE CONTAINER -->
        </nav><!-- CULMINA NAVBAR-FIXED-TOP  -->
	</div> <!-- CULMINA DIV NAVBAR-WRAPPER  -->