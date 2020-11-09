<!DOCTYPE html>
<html>
    <head>

        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style_lista.css" media="screen">
        <meta charset="utf-8">
        
    </head>
    <body>
        <h1 class="titulo">Resultados...</h1>

         <?php
        error_reporting (E_ALL ^ E_NOTICE);

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
        $facil = $_POST['facil'];
        $normal = $_POST['normal'];
        $dificil = $_POST['dificil'];

        if($facil==''and $normal=='' and $dificil==''){
            $consulta = "SELECT * FROM receta WHERE INGREDIENTES LIKE '%$receta%'";
        }else{
            $consulta = "SELECT * FROM receta WHERE INGREDIENTES LIKE '%$receta%' AND DIFICULTAD = '$facil' OR DIFICULTAD = '$normal' OR DIFICULTAD = '$dificil'";
        }

        $datos = mysqli_query($conexion,$consulta);

            $noresult=0;

            while ($fila=mysqli_fetch_array($datos)){;?>
                
                <div>
                     <label for="label"><h2><?php $nombre = $fila["NOMBRE_RECETA"]; echo "$nombre";?></h2><p><?php $descripcion = $fila["DESCRIPCION"]; echo "$descripcion";?></p></label>
                    <input type="button" id="label" class="boton">
                 </div>
                 
                 <?php if($fila!=""){

                    $noresult=1;
                 }
                }

                if($noresult==0){
                    ?> <h5 class="titulo">No pudimos encontrar coincidencias. ¡Lo sentimos!</h5>
                    <div> 
                    <img id="imagen" src="tumbleweed.png">
                    </div>
                    <a href="C:\Users\Nahuel\Documents\GitHub\Proyecto-anual\Menú\index.html"> Volver? </a>
                    <?php
                }
                 
                 ?>
               
        
    </body>
</html>