<?php include('configuracion.php'); ?>
<?php include('bd/conexion.php');
      $db = new Conexion();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Selectize JS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="http://selectize.github.io/selectize.js/css/selectize.default.css" >

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>

<script src="http://selectize.github.io/selectize.js/js/selectize.js"></script>

<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">

<style>
body{font-family: 'Baloo Bhaina', cursive;}
</style>


</head>
<body>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		 <h1>Búsqueda de Alumnos con Selectize.JS</h1>
		 <hr>
        
    <form action="consulta.php" method="post">
      
    <select id="idalumno" name="alumno[]" multiple class="demo-default"  
    placeholder="[ SELECCIONAR ALUMNO ]" required="">
        <option value="">[SELECCIONAR ALUMNO]</option>
        <?php 
         $query   = "SELECT * FROM alumno ORDER BY nombres";
         $result  = $db->query($query);
         while ($fila = mysqli_fetch_object($result)) {
          echo "<option value='$fila->nombres $fila->apellidos'>$fila->nombres $fila->apellidos</option>";
         }

         ?>
    </select>
 <script >
$('#idalumno').selectize({
maxItems: 3
});
</script>
   <button class="btn btn-primary">Consultar</button>

    </form>



		</div>
	</div>
</div>
</body>
</html>