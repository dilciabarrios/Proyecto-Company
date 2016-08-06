
	<? include('header.php'); ?>
	<? include('navbar.php'); ?>

	<?

	if(!isset($_GET['menu'])){
		include ("inicio.php");
	}
	else { 

 		switch ($_GET['menu']) {

		case "quienes_somos":
			include("quienes-somos.php");
			break;
		case "areas_de_trabajo":
			include("areas.php");
			break;
		case "servicios":
			include("servicios.php");
			break;
		case "especialidades":
			include("especialidades.php");
			break;
		case "contacto":
			include("contacto.php");
			break;
		default:
			include("inicio.php");
			break;

	   		}
	  }?>

	<? include('scripts.php'); ?>

	<? include('footer.php'); ?>