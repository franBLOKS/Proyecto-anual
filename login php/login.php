<?php
  session_start();
  if (isset($_SESSION['usuarios_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM usuarios WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['usuarios_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Lo siento, pero esa cuenta no se encontro.';
    }
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
<?php if(!empty($message)): ?>
<p> <?= $message ?></p>
<?php endif; ?>
    <h1>Inicio de sesión:</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su correo electronico:">
        <input type="password" name="contraseña" placeholder="Ingrese su contraseña:">
        <center><input type="submit" value="Enviar"></center>
    </from>
    <center><a href="index.php">Atras</a></center>
</body>
</html>