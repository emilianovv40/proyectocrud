<?php
require_once 'db_conexion.php';

  if ($_POST){
  	   $Nombres = $_POST['Nombres'];
  	   $Apellidos = $_POST['Apellidos'];
  	   $Edad = $_POST['Edad'];
  	   $Domicilio = $_POST['Domicilio'];
  	   $Correo = $_POST['Correo'];


  	   $sql = "INSERT INTO alumnos (Nombres, Apellidos, Edad, Domicilio, Correo, Activo) VALUES ('$Nombres', '$Apellidos', '$Edad', '$Domicilio', 'Correo', 1)";
  	   if ($connect -> query($sql) === TRUE){
  	    	echo "<p>¡Nuevo registro creado exitosamente!</p>";
  	   	    echo "<a href= '../index.php'><button type='button'>Ir al Inicio</button></a>";
  	   } else {
  	   	   echo "Error" .$sql. ' ' . $connect ->connect_error;
  	   }
  $connect ->close();
  }
?>