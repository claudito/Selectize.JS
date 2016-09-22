<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">

<style>
body{font-family: 'Baloo Bhaina', cursive;}
</style>

<?php 

$consulta  =  $_POST['alumno'];


foreach ($consulta as $key => $value) 
{
	echo "<h1>".$value."</br>"."</h1>";
}


 ?>