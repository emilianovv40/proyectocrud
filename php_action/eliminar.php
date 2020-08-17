<?php
require_once 'db_conexion.php';

  if ($_POST){
    $id = $_POST['id'];


  	   $sql = "UPDATE alumnos SET Activo = 2 WHERE Folio = {$id}";
  	   if ($connect -> query($sql) === TRUE){
  	    	echo "<p>¡Eliminado exitosamente!</p>";
  	   	    echo "<a href= '../index.php'><button type='button'>Ir al Inicio</button></a>";
  	   } else {
  	   	   echo "Error al eliminar registro: " .$sql. ' ' . $connect ->connect_error;
  	   }
      $connect -> close();
  }
?>