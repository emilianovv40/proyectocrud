<?php
  require_once 'php_action/db_conexion.php';

  if ($_GET['id']) {
    $Folio = $_GET['id'];

    $sql = "SELECT * FROM alumnos WHERE Folio = {$Folio}";
    $result = $connect ->query($sql);

    $data = $result->fetch_assoc();

    $connect ->close(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Editar Alumnos</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

	<style type="text/css">
    	fieldset {
    		margin:auto;
    		margin-top:100px;
    		width: 65%;
    	}
    	table, tr, th{
    		padding-top: 20px;

    	}
        body {
    background-color: #C8E6C9;
}
    </style>
</head>
<body>
    <fieldset>
        <legend>Editar Datos del Alumno</legend>
        <form action="php_action/actualizar.php" method="POST">
            <table>
                <tr>
                    <th>Nombres</th>
                    <th><input type="text" name="Nombres" value="<?php echo $data['Nombres']?>"/></th>
                </tr>
                <tr>
                    <th>Apellidos</th>
                    <th><input type="text" name="Apellidos" value="<?php echo $data['Apellidos']?>"/></th>
                </tr>
                <tr>
                    <th>Edad</th>
                    <th><input type="number" name="Edad" min="18" max="99" value="<?php echo $data['Edad']?>"/></th>
                </tr>
                <tr>
                    <th>Domicilio</th>
                    <th><input type="text" name="Domicilio" value="<?php echo $data['Domicilio']?>"/></th>
                </tr>
                <tr>
                    <th>Correo</th>
                    <th><input type="email" name="Correo" value="<?php echo $data['Correo']?>"/></th>
                </tr>
                <br>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $data['Folio']?>"/>
                    <td><button type="submit">Actualizar Datos</button></td>
                    <td><a href="index.php"><button type="button">Regresar</button></a>
                </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>
<?php
}
?>