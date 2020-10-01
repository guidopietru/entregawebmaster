<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> PHP 2 </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

		<link rel="stylesheet" type="text/css" href="css/estilos.css"/>
    <script src="https://kit.fontawesome.com/e797888544.js" crossorigin="anonymous"></script>

	</head>
	<body>
<header class="mb-3 container-fluid p-5">
<?php
				$subtitulo = "Envio de mail";
				include('header.php');
				?>
 
</header>
		<div class="formulario contenedor mb-5">
			
			
			<div class="form">
				
<form action="datosform.php" method="POST">
  <div class="form-group">
    <label for="campoNombre">Nombre</label>
    <input type="text" class="form-control" id="campoNombre" name='nombre' required>
  </div>
  <div class="form-group">
    <label for="campoEmail">Email</label>
    <input type="email" class="form-control" id="campoEmail" name="email" required>
  </div>
  <div class="form-group">
    <label for="campolocal">Localidad</label>
    <input type="text" class="form-control" id="campolocal" name="localidad" required>
  </div>
  <div class="form-group">
    <label for="campoMensaje">Mensaje</label>
    <textarea name="mensaje" id="campoMensaje" class="form-control" required></textarea>
  </div>
  <input type="submit" value="Enviar" class="btn btn-primary">
</form>

			</div>

		</div>
<?php
include("footer.php");
?>



    </div>
 

  </div>
  

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Papeleria del Norte Argentina
  
  </div>

</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>