<?php
session_start();
if (empty($_SESSION["agente_id"])) {
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Página de Agentes</title>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<nav class="navbar navbar-dark bg-dark navbar-expand-md navbar-light bg-light fixed-top">
		<div class="text-white bg-success p-2">
			<?php
			echo "Agente: " . $_SESSION["nombre"];
			?>
		</div>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
			<div class="navbar-nav mr-auto">
				<a class="nav-item nav-link text-justify ml-3 hover-primary" href="controlador/controlador_cerrar_session.php">Salir</a>

			</div>

		</div>

	</nav>
	<div class="modal fade" id="modalMision" tabindex="-1" role="dialog" aria-labelledby="modalMisionLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
		<div class="modal-header">
			<h5 class="modal-title" id="modalMisionLabel">Descripción de la Misión</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
		<div class="modal-body">
			<?php
			echo $_SESSION["descripcionMision"];
			?>
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
		</div>
		</div>
	</div>
	</div>

	<div class="container-fluid">
		<div class="jumbotron bg-dark text-light rounded-0">
			<h1 class="display-4">Hello, <?php
			echo "Agente: " . $_SESSION["nombre"];
			?></h1>
			<p class="lead">Buen dia para empezar misiones</p>
			<hr class="my-4 bg-light">
			<div class="d-flex justify-content-between align-items-center flex-wrap">
				<p>Mira tu ultima mision</p>
				<a class="btn btn-primary btn-lg" href="#" role="button" data-toggle="modal" data-target="#modalMision">Ver misión actual</a>
			</div>
		</div>
	</div>

	<form action="" class="form-inline d-flex justify-content-center flex-column flex-md-row">
		<div class="form-group mx-2 my-2">
			<label class="d-none d-md-block" for="">Numero de misiones: </label>
			<div class="text-white bg-success p-2">
			<?php
			echo $_SESSION["numMisiones"];
			?>
		    </div>
			
		</div>
	</form>

	<p>Confidencialidad de la Información: Todos los agentes están obligados a mantener la confidencialidad de la información a la que tengan acceso durante el desempeño de sus funciones. Esto incluye, pero no se limita a, datos de clientes, estrategias operativas, información financiera y cualquier otra información sensible relacionada con las operaciones de la organización. Cualquier divulgación no autorizada de esta información está estrictamente prohibida y puede resultar en acciones disciplinarias o legales. Los agentes deben seguir los protocolos de seguridad establecidos para proteger la información confidencial y reportar cualquier incidente de seguridad de inmediato a las autoridades competentes.</p>

	<script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>
