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
                        <li <? if(!isset($_GET['menu']) || $_GET['menu']==1) {echo 'class="selected"';} ?>>
                        <a href="index.php?menu=1">Home</a>
                        </li>
                        <li <? if(!isset($_GET['menu']) || $_GET['menu']==2) {echo 'class="selected"';} ?>>
                        <a href="index.php?menu=2">Quienes Somos</a>
                        </li>
                       	<li class=" dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categorias <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li <? if(!isset($_GET['menu']) || $_GET['menu']==3) {echo 'class="selected"';} ?>>
                                <a href="index.php?menu=3">Areas de Trabajo</a>
                                </li>
                                <li <? if(!isset($_GET['menu']) || $_GET['menu']==4) {echo 'class="selected"';} ?>>
                                <a href="index.php?menu=4">Servicios</a>
                                </li>
                                <li <? if(!isset($_GET['menu']) || $_GET['menu']==5) {echo 'class="selected"';} ?>>
                                <a href="index.php?menu=5">Especialidades</a>
                                </li>
                            </ul>
                        </li>
                        <li <? if(!isset($_GET['menu']))  || $_GET['menu']==6) {echo 'class="selected"';} ?>>
                        <a href="index.php?menu=6">Contacto</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
        
                    </ul>
                </div><!-- CULMINA DIV DE NAVBAR -->
            </div><!-- CULMINA DIV DE CONTAINER -->
        </nav><!-- CULMINA NAVBAR-FIXED-TOP  -->
	</div> <!-- CULMINA DIV NAVBAR-WRAPPER  -->