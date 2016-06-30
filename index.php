<?php include('configuracion.php'); ?>
<?php include('bd/conexion.php');
      $db = new Conexion();
 ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Selectize JS</title>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<script src="librerias/Selectize.js/dist/js/standalone/selectize.min.js"></script>

<script src="librerias/Selectize.js/index/js/index.js"></script>
</head>
<body>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		 <h1>Búsqueda de Alumnos con Selectize.JS</h1>
		 <hr>
        
    <form action="">
      
    <select name="alumnos" id="alumnos" required="">
        <option value="">[SELECCIONAR ALUMNO]</option>
        <?php 
         $query   = "SELECT * FROM alumno ORDER BY nombres";
         $result  = $db->query($query);
         while ($fila = mysqli_fetch_object($result)) {
          echo "<option value='$fila->codigo'>$fila->nombres $fila->apellidos</option>";
         }

         ?>
    </select>
   <script>
    $('#alumnos').selectize();
   </script>

   <button class="btn btn-primary">Consultar ID</button>

    </form>

<h2>Atención</h2>
<hr>
<ul>
<li>La variable <strong>url</strong> debe contener la ruta de su proyecto.</li>
<li>EL archivo lo encontramos en <strong>librerias/Selectize.js/index/js/index.js</strong></li>
</ul>


<img src="img/img01.JPG" alt="atencion" class="img-responsive img-thumbnail">

		</div>
	</div>
</div>
</body>
</html>