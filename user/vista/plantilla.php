<?php

?>
<!DOCTYPE html>
<html lang="en" >
	<!-- begin::Head -->
	<head>
		<meta http-equiv=”Content-Type” content=”text/html; charset="utf-8" />
		<title>
			User
		</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Pragma" content="no-cache">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="vista/css/style.css" rel="stylesheet" type="text/css" />
		<link href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css" rel="stylesheet">
 		<script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
 		<script  src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
 		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	</head>
	<body>

			<?php

			if(isset($_SESSION["user"])){


				if($_GET["ruta"] == "login"){

					include("modulos/".$_GET["ruta"].".php");

				}else{

					if(isset($_GET["ruta"])){

		        		if(	$_GET["ruta"] == "registro"){

		           		   	include "modulos/".$_GET["ruta"].".php";

		           		}else{

		           			include "modulos/dashboard.php";

		           		}

		           	}else{

		           		include "modulos/notFound.php";

		           	}
                    
		           	// include("modulos/footer.php");

				}
			}
			else{
				if($_GET["ruta"] == "login" || $_GET["ruta"] == ""){
					include("modulos/login.php");
				}
				else{
					include("modulos/login.php");
				}
			}

			?>
				

    	<?php
        if(isset($_GET["ruta"])){
            if($_GET["ruta"] == 'login' ||
		       $_GET["ruta"] == "registro"){  
                echo '<script type="text/javascript" src="vista/js/'.$_GET["ruta"].'.js"></script>';
            }
        }
        ?>

    </body>
</html>