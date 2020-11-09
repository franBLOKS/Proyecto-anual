<?php

function connectDB(){
    $enlace = mysqli_connect("localhost","root","","usuarios");
    return $enlace; 
}
function disconnectDB($conexion){
    $close= mysqli_close($conexion);
}
$nombre = $_POST["email"];
$contra = $_POST["contraseña"];
validar($nombre, $contra);
function validar($nombre, $contra){
$conexion = connectDB();
$sql = "SELECT * FROM usuarios";
mysqli_set_charset($conexion, "utf8"); 
if(!$result = mysqli_query($conexion, $sql)) die();
while($row = mysqli_fetch_array($result)) 
{ 
    $usuario=$row['email'];
    $ct=password_verify($contra, $row['password']);
    if($usuario == $nombre && $contra == $ct){
        disconnectDB($conexion);
        echo '<script language="javascript">
        document.location.href="index.html";
        </script>';
        return;
    }else if ($usuario == $nombre && $contra != $ct) {
        echo "No se reconoce la cpntraseña";
        disconnectDB($conexion);
        return;
    }
}
disconnectDB($conexion);
echo "No se reconoce el usuario";
return;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido</title>
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets\style_login.css">
        <meta charset="utf-8">
        </head>
<body>

  
    <h1>Inicio de sesión:</h1>
    <?php if(!empty($message)): ?>
    <p> <?= $message ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su nombre de usuario:">
        <input type="password" name="contraseña" placeholder="Ingrese su contraseña:">
        <center><input type="submit" value="Enviar"></center>
    </from>
    <center><a href="index.php" class="Atras">Atras</a></center>
</body>
</html>