<?php
  session_start();
  if (isset($_SESSION['user_id'])) {
    header('Location: /php-login');
  }
  require 'database.php';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $message = '';
    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-login");
    } else {
      $message = 'Lo siento pero esa cuenta no se encontro';
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenido</title>
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="utf-8">
        </head>
<body>
<?php if(!empty($message)): ?>
<p> <?= $message ?></p>
<?php endif; ?>
    <h1>Inicio de secion</h1>
    <form action="login.php" method="post">
        <input type="text" name="email" placeholder="Ingrese su mail">
        <input type="password" name="contraseña" placeholder="Ingrese su contraseña">
        <input type="submit" value="send">
    </from>
    <a href="index.php">Atras</a>
</body>
</html>