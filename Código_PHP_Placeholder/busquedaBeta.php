<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "recetas";

            $conexion = mysqli_connect($servername, $username,$password,$database);

            if($conexion){

                //echo "<p>Conexión exitosa.</p>";
            }else{
                echo "<p>Cagaste, pa.</p>";
            }
        
            $receta = $_POST['busqueda'];

           // echo $receta;

            $consulta = "SELECT * FROM receta WHERE NOMBRE_RECETA LIKE '%$receta%'";

            //mysql_select_db("recetas");

            $datos = mysqli_query($conexion,$consulta);

            while ($fila=mysqli_fetch_array($datos)){
                echo "<p>";
                echo "-"; //un separador
                echo $fila ["NOMBRE_RECETA"];
                echo "-"; // un separador
                echo $fila ["DIFICULTAD"];
                echo "-"; // un separador
                echo $fila ["PROCEDIMIENTO"];
                echo "<p>";
            }

        ?>

<!DOCTYPE html>
<html lang="es">
<html>

    <head>
        <meta charset="utf-8"/>
		<title>Pene</title>
    </head>
    <body>
        
</body>
</html>