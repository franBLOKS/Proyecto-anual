<!DOCTYPE html>
<html>
    <head>
        
        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="esteticaL.css" media="screen">
        <meta charset="utf-8">

    </head>
    <body>    
        <h1 class="titulo">Resultados...</h1>

        <div>
        <input type="submit" value="busqueda" href="C:/Users/franBLOKS/Desktop/6to%20C/So/Proyecto-anual/Menú%20(BETA)/index.html">
        </div>
        
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


        $consulta = "SELECT * FROM receta WHERE NOMBRE_RECETA LIKE '%$receta%'";


        $datos = mysqli_query($conexion,$consulta);

        //$datos=($_GET["datos"]);

            while ($fila=mysqli_fetch_array($datos)){;?>
                
                <div>
                     <label for="label"><h2><?php $nombre = $fila["NOMBRE_RECETA"]; echo "$nombre";?></h2><p><?php $descripcion = $fila["DESCRIPCION"]; echo "$descripcion";?></p></label>
                    <input type="button" id="label" class="boton" action="">
                 </div>
                 
                 <?php };?>
               
        
    </body>
</html>