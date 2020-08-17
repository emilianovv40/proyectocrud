<?php
require_once 'db_conexion.php';

  if ($_POST){
  	   $Nombres = $_POST['Nombres'];
  	   $Apellidos = $_POST['Apellidos'];
  	   $Edad = $_POST['Edad'];
  	   $Domicilio = $_POST['Domicilio'];
  	   $Correo = $_POST['Correo'];

       $id = $_POST['id'];


  	   $sql = "UPDATE alumnos SET Nombres = '$Nombres', Apellidos = '$Apellidos', Edad = '$Edad', Domicilio = '$Domicilio', Correo = '$Correo' WHERE Folio = {$id}";
        
  	   if ($connect -> query($sql) === TRUE){
  	    	echo "<p>¡Actualizado exitosamente!</p>";
          echo "<a href= '../editar.php?id=".$id."'><button type='button'>Editar Nuevamente</button></a>";
  	   	    echo "<a href= '../index.php'><button type='button'>Ir al Inicio</button></a>";
  	   } else {
  	   	   echo "Error al actualizar registro: " .$sql. ' ' . $connect ->connect_error;
  	   }
  $connect ->close();
  }
?>