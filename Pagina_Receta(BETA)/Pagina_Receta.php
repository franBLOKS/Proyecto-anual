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
        $receta = $_POST['receta'];
        echo "El valor es: $receta";
        ?>

        <h1>título receta</h1>

        <img src="imagenes_prueba/default.jpg" id="imagen1">
        
        <p id="comentario">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque vitae fugiat quo repellat laboriosam.</p>
        
        <div id="contenedor1">

            <h2 id="subtitulo">Ingredientes: </h2>

            <ul>
                <li>Ingrediente n°(número). Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
            </ul>

        </div>
        
        <div id="contenedor2">

            <h2 id="subtitulo">Instrucciones: </h2>

            <ol>
                <li>Paso n°(número). Lorem ipsum dolor sit, amet consectetur adipisicing elit. Enim debitis.</li>
            </ol>

        </div>
        
        <h3>Quizás te interese ver: </h3>

        <div id="contenedor3">

            <div>
                <label for="label1"><img src="imagenes_prueba/default.jpg" class="imagen2"></label><label for="boton_cen"><img id="imagen2_cen" src="imagenes_prueba/default.jpg" class="imagen2"></label><label for="label3"><img src="imagenes_prueba/default.jpg" class="imagen2"></label>
            </div>
            <div>
                <input type="button" value="título receta 1" id="label1" class="boton"><input type="button" id="boton_cen" value="título receta 2" id="boton_cen" class="boton" class="boton_cen"><input type="button" value="título receta 3" id="label3" class="boton">
            </div>
            
        </div>

    </body>
</html>