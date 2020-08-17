<?php
    require_once 'php_action/db_conexion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Sistema PHP = CRUD</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <style type="text/css">
    	.GestionarAlumnos {
    		width: 65%;
    		margin:auto;
    	}
    	table{
    		background-color: white;
    		width: 100%;
    		margin-top:20px;
    	}
    	body{
        background: #29B6F0;
         }
 
}

}
    </style>
    
</head>
<body>
	<div class="GestionarAlumnos">
		<h1>PHP CRUD de Alumnos</h1>
		<a href="crear.php"><button type="button">Añadir alumnos</button></a>
		<table class="table table-striped table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">Nombre completo</th>
					<th scope="col">Edad</th>
					<th scope="col">Domicilio</th>
					<th scope="col">Email</th>
					<th scope="col">Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php
				   $sql = "SELECT * FROM alumnos WHERE ACTIVO = 1";
				   $result = $connect -> query($sql); 

				   if($result ->num_rows > 0){
				   	while($row = $result ->fetch_assoc()) {
				   		echo "<tr>
				   		        <td>".$row['Nombres']." ".$row['Apellidos']."</td>
				   		        <td>".$row['Edad']."</td>
				   		        <td>".$row['Domicilio']."</td>
				   		        <td>".$row['Correo']."</td>
				   		        <td>
				   		            <a href='editar.php?id=".$row['Folio']."'>
				   		            <button type='button'>Editar</button></a>
				   		            <a href='eliminar.php?id=".$row['Folio']."'>
				   		            <button type='button'>Eliminar</button></a>
				   		        </td>
				   		      </tr>";
				   		  }
				   }else{

				   	echo "<tr> <td colspan='5' <center>Datos no disponibles/Base de datos vacia.</center></td></tr>";
				   }


				?>
			</tbody>
		</table>
	</div>
<p>Jose Emiliano Valdovinos Vergara 19307027</p>
</div>
</body>
</html>
