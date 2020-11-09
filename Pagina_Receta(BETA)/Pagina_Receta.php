<!DOCTYPE html>

<html>
    <head>

        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="Pagina_Receta.css" type="text/css" media="screen">
        <meta charset="utf-8">
        <title>Receta</title>
        
    </head>

    <body>

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


         $receta = $_POST['receta'];
        
         $consulta = "SELECT * FROM receta WHERE NOMBRE_RECETA = '$receta'";

         $datos = mysqli_query($conexion,$consulta);

         $fila=mysqli_fetch_array($datos);

         $tituloreceta = $fila["NOMBRE_RECETA"];  

         $descripcion = $fila["DESCRIPCION"];

         $ingredientes = $fila["INGREDIENTES"];

         $procedimiento = $fila["PROCEDIMIENTO"];

        ?>

        <h1><?php echo "$tituloreceta"; ?></h1>

        <img src="imagenes_prueba/default.jpg" id="imagen1">
        
        <p id="comentario"><?php echo "$descripcion"; ?></p>
        
        <div id="contenedor1">

            <h2 id="subtitulo">Ingredientes: </h2>

            <ul>
                <li><?php echo "$ingredientes"; ?></li>
            </ul>

        </div>
        
        <div id="contenedor2">

            <h2 id="subtitulo">Instrucciones: </h2>

            <ol>
                <li><?php echo "$procedimiento"; ?></li>
            </ol>

        </div>
        
        <h3>Quizás te interese ver: </h3>

        <div id="contenedor3">

        <?php 
        
        $consulta = "SELECT * FROM receta WHERE INGREDIENTES LIKE '%$ingredientes%'"; 
        
        $datos = mysqli_query($conexion,$consulta);
        
        ?>

            <div>
                <label for="label1"><img src="imagenes_prueba/default.jpg" class="imagen2"></label><label for="boton_cen"><img id="imagen2_cen" src="imagenes_prueba/default.jpg" class="imagen2"></label><label for="label3"><img src="imagenes_prueba/default.jpg" class="imagen2"></label>
            </div>
            <div>
                <input type="submit" value="título receta 1" id="label1" class="boton"><input type="submit" id="boton_cen" value="título receta 2" id="boton_cen" class="boton" class="boton_cen"><input type="button" value="título receta 3" id="label3" class="boton">
            </div>
            
        </div>

    </body>
</html>