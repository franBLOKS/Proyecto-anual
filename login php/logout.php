<?php
session_start();
session_unset();
session_destroy();
header('Location: /php-login');
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets\style_logout.css">
	<title></title>
</head>
<body>

</body>
</html>