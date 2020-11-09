<!DOCTYPE html>
<html>
    <head>

        <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;1,100;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="style_lista.css" media="screen">
        <meta charset="utf-8">

        <style>
            center{
                background-color: #ECE20F;
                /*Ubicacion*/
                margin-top:3vh;
                margin-left:3vh;
                display: inline-block;

                /*bordes*/
                border: 1.05vh outset rgb(236, 226, 15);
                border-radius: 1.1vh;

                /*color del texto y del fondo*/
                user-select: none;
                outline: none;
            }
        </style>
        
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
            $consulta = "SELECT * FROM receta WHERE INGREDIENTES LIKE '%$receta%' AND (DIFICULTAD = '$facil' OR DIFICULTAD = '$normal' OR DIFICULTAD = '$dificil')";
        }

        $datos = mysqli_query($conexion,$consulta);

        //$datos=($_GET["datos"]);

            $noresult=0;

            while ($fila=mysqli_fetch_array($datos)){;?>
                
                <div>
                     <label for="label"><h2><?php $nombre = $fila["NOMBRE_RECETA"]; echo "$nombre";?></h2><p><?php $descripcion = $fila["DESCRIPCION"]; echo "$descripcion";?></p> 
                    
                     <form method="POST" action="http://127.0.0.1/Pagina_Receta(BETA)/Pagina_Receta.php">
                        <input type="hidden" name="receta" value="<?php echo htmlspecialchars($nombre);?>">
                        <center><input type="submit" value="Ver receta"></center>
                     </form>
                    </label>
                    
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
                    <a href="http://localhost/Menú/index.html"> Volver al menú de búsqueda </a>
                    <?php
                }
                ?>
                
        
    </body>
</html>