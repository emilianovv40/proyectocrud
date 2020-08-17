<?php
  require_once 'php_action/db_conexion.php';

  if ($_GET['id']) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM alumnos WHERE Folio = {$id}";
    $result = $connect ->query($sql);

    $data = $result->fetch_assoc();

    $connect ->close(); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Eliminar Alumnos</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<style type="text/css">
    	fieldset {
    		margin:auto;
    		margin-top:100px;
    		width: 65%;
    	}
    	table, tr, th{
    		padding-top: 20px;

    	}
        body{
        background: #F0310F;
         }
    </style>
</head>
<body>

     <h3>¿Realmente quieres eliminarlo?</h3>
    <form action="php_action/eliminar.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $data['Folio']?>"/>
        <button type="submit">Si, !Eliminar¡</button>
        <a href="index.php"><button type="button">Regresar</button></a>
    </form>

</body>
</html>
<?php
}
?>