<?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "recetas";

            $conexion = mysqli_connect($servername, $username,$password,$database);

            if($conexion){

                //echo "<p>Conexión exitosa.</p>";
            }else{
                echo "<p>No se ha podido conectar con la base de datos.</p>";
            }
        
            $receta = $_POST['busqueda'];

           // echo $receta;

            $consulta = "SELECT * FROM receta WHERE NOMBRE_RECETA LIKE '%$receta%'";

            //mysql_select_db("recetas");

            $datos = mysqli_query($conexion,$consulta);

            while ($fila=mysqli_fetch_array($datos)){
                
                echo $fila ["NOMBRE_RECETA"];
               
                echo $fila ["DIFICULTAD"];
              
                echo $fila ["PROCEDIMIENTO"];
              
            }

        ?>

<!DOCTYPE html>
<html lang="es">
<html>

    <head>
        <meta charset="utf-8"/>
		<title>Búsqueda</title>
    </head>
    <body>
        
</body>
</html>