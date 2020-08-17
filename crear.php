<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Anadir Alumnos</title>

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

}
    </style>
</head>
<body>
    <fieldset>
        <legend>Agregar Datos del Alumno</legend>
        <form action="php_action/crear.php" method="POST">
            <table>
                <tr>
                    <th>Nombres</th>
                    <th><input type="text" name="Nombres" placeholder="Agrega tu nombre" required></th>
                </tr>
                <tr>
                    <th>Apellidos</th>
                    <th><input type="text" name="Apellidos" placeholder="Agrega tu Apellidos" required></th>
                </tr>
                <tr>
                    <th>Edad</th>
                    <th><input type="number" name="Edad" min="18" max="99" placeholder="Agrega tu Edad" required></th>
                </tr>
                <tr>
                    <th>Domicilio</th>
                    <th><input type="text" name="Domicilio" placeholder="Agrega tu Domicilio" required></th>
                </tr>
                <tr>
                    <th>Correo</th>
                    <th><input type="email" name="Correo" placeholder="Agrega tu email" required>
                </tr>
                <br>
                <tr>
                    <td><button type="submit">Guardar Cambios</button></td>
                    <td><button type="reset">Limpiar Campos</button></td>
                    <td><a href="index.php"><button type="button">Regresar</button></a>
                </tr>
            </table>
        </form>
    </fieldset>

</body>
</html>