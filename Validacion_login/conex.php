<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta</title>
    <link rel = "Stylesheet"  href = "./tablaes.css"/>  

</head>
<body>

<?php
$nomcom = $_POST["nombre"]; 
$usuario = $_POST["user"];
$pass = $_POST["pass"];
$conpass = $_POST["pass2"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];
$fecha = $_POST["fchnac"];
$RFC = $_POST["rfc"];
?>
<table>
    <tr>
        <td> Campo </td>
        <td> Registro</td>
    </tr>

    <tr>
        <td> Nombre compoleto</td>
        <td> <?php echo($nomcom); ?></td>
    </tr>

    <tr>
        <td>Nombre de usuario</td>
        <td> <?php echo($usuario); ?></td>
    </tr>

    <tr>
        <td>password</td>
        <td> <?php echo($pass); ?></td>
    </tr>

    <tr> 
    <td>Confirmar password</td>
    <td> <?php echo($conpass); ?></td>
    </tr>

    <tr>
        <td>Correo electronico</td>
        <td> <?php echo($email); ?></td>
    </tr>

    <tr>
        <td>Telefono </td>
        <td> <?php echo($telefono); ?></td>
    </tr>

    <tr>
        <td>Genero</td>
        <td> <?php echo($genero); ?></td>
    </tr>

    <tr>
        <td>Fecha de nacimiento </td>
        <td> <?php echo($fecha); ?></td>
    </tr>

    <tr>
        <td>RFC</td>
        <td> <?php echo($RFC); ?></td>
    </tr>

   
</table>
   
 
</body>
</html>