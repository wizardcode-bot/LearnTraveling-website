<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8559-1">
    <meta charset="UTF-8">
    <!-- adjusts the website width to the device it is being used -->
    <meta name="viewport" content="width=device-width, inicial-scale=1.0">
    <meta name="description" content="Company website for learning languages traveling around the world">
    <meta name="keywords" content="traveling, learning languages, teaching, polyglot">
    <meta name="author" content="Edinson Fabian, Yonatan Camilo, Juan Camilo">
    <meta name="Copyright" content="LearnTraveling">
    <!-- para que el buscador index nuestra página ( la muestre al principio) -->
    <meta name="robots" content="index"> 
    <script src="https://kit.fontawesome.com/3c8ce09c45.js" crossorigin="anonymous"></script>
    <script src="indexjavascript.js"></script>
    
    <link rel="icon" href="images/">
    <link rel="stylesheet" href="stylesindex.css">
    <title>LearnTraveling</title>
</head>
<h1 class="title1"> LearnTraveling Website</h1>
<body>

<div class="contenedor">

    <div class="atras botones">
        &#60
    </div>
    <div class="adelante botones">
        &#62
    </div>
     
    <div class="modal-container">
        <img src="imagenesindex/brasil.jpg" alt="imagenes de muestra" id="imagenslider">
    </div>

</div>

<h2 id="turistic">LUGARES TURISTICOS MAS RECOMENDADOS</h2>
<div class="container">

    <div class="item">
        <img src="imagenesindex/caño_cristales.jpg" alt="" class="item-img">
        <div class="item-text">
            <h3>COLOMBIA</h3>
            <p>Caño Cristales - La Macarena</p>
        </div>
    </div>

    <div class="item">
        <img src="imagenesindex/piramides_egipto.jpg" alt="" class="item-img">
        <div class="item-text">
            <h3>EGIPTO</h3>
            <p>Pirámides - Bajo Egipto</p>
        </div>
    </div>

    <div class="item">
        <img src="imagenesindex/cascada_islandia.png" alt="" class="item-img">
        <div class="item-text">
            <h3>ISLANDIA</h3>
            <p>Montaña Kirkjufell</p>
        </div>
    </div>

    <div class="item">
        <img src="imagenesindex/tokio_ciudad.jpg" alt="" class="item-img">
        <div class="item-text">
            <h3>JAPON</h3>
            <p>Ciudad de Tokio en la noche</p>
        </div>
    </div>

    <div class="item">
        <img src="imagenesindex/australia_sidney.jpg" alt="" class="item-img">
        <div class="item-text">
            <h3>AUSTRALIA</h3>
            <p>Ciudad de Sidney</p>
        </div>
    </div>

    <div class="item">
       <img src="imagenesindex/Milford_Track_nueva_zelanda.jpg" alt="" class="item-img">
        <div class="item-text">
            <h3>NUEVA ZELANDA</h3>
            <p>Milford Track</p>
        </div>
    </div>

</div>

<article>
    <!-- COMENTARIOS -->
    <div class="comentarios">
            <i class="fas fa-user  usuario" align="left">   Lucy</i>
        <p class="texto">
            Tuve una experiencia magnifica, desde el primero momento en que me contacté con la empresa hé recibido un excelente trato y servicio. Lo recomiendo totalmente.
        </p>
    </div>
    
    <div class="comentarios1">
        <i class="fas fa-user  usuario" align="right">   Grigori</i>
        <p class="texto">
            Really love this company! I never imagined that learning languages could be so exciting. I'd do it again and again undoubtedly. <br>
            :)
        </p>
    </div>
</article>

<?php
include_once "footer.php";
?>

</body>
</html>