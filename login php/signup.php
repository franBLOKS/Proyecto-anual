<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO usuarios (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado';
    } else {
      $message = 'Hemos tenido un error';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
    <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">    
    <link rel="stylesheet" href="assets\style_signup.css">
  </head>
  <body>
    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>
    <h1>Registrarse</h1>
    
    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="Ingrese un nombre">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input name="confirm_password" type="password" placeholder="Confirme su contraseña">
      <center><input type="submit" value="Inscribirse"></center>
      <center><span class="boton"><a href="login.php" >¿Ya tenes cuenta? ¡Inicia sesión!</a></span></center>
    </form>
  </body>
</html>