<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> PHP - MySQL  Buscador  </title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/estilos.css" />
	</head>
	<body>
    <?php
    $subtitulo = "Resultados de la búsqueda";
	include('header.php');
	?>
        
		<div class="contenedor">
			<div class="datos">

<?php


    $busqueda="error";
}else{
    $busqueda=$_POST['busqueda'];
}

include("conexion.php");


$query_select="SELECT id,nombre,email,localidad from datosform where nombre like '%$busqueda%'";
$consulta=mysqli_query($conexion,$query_select);

$cant_resultados = mysqli_num_rows($consulta);

if($cant_resultados==0){
    echo "No hay usuarios que coincidan con la búsqueda.<br>";
    echo $busqueda;
    echo "<a href='buscador.php' class='btn btn-danger'>volver</a>";
}else{
    echo "<h2>Cantidad de usuarios encontrados: ".$cant_resultados."</h2>";
    ?>
<table class="table table-hover">
<thead class='thead-dark'>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Localidad</th>
    </tr>
  </thead>
<tbody>
    <?php
    while($datos = mysqli_fetch_array($consulta)){
        echo "<tr>";
        echo '<th scope="row">'.$datos['id'].'</th>';
        echo "<td>".$datos['nombre']."</td>";
        echo "<td>".$datos['email']."</td>";
        echo "<td>".$datos['localidad']."</td>";
        echo "</tr>";
    }   

    echo "<a href='buscador.php' class='btn btn-danger'>volver</a>";
}

mysqli_free_result($consulta);
mysqli_close($conexion);

?>
</div>
</div>


<?php
include("footer.php");
?>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>