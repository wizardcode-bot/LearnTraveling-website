<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesofertas.css">
    <script src="https://kit.fontawesome.com/3c8ce09c45.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<img class="imgbanner"src="imagenesofertas/banderas.png" alt="">

<body>

<input type="checkbox" id="chec">
    <label for="chec">
        <i class="fas fa-arrow-down  flecha" ></i>
    </label>
    <nav>
        <ul class="nav1" >
            <li><a class="a" href="">HOME</a></li>
            <li><a class="a" href="">ABOUT</a></li>
            <li><a class="a" href="">OFFERS</a></li>
            <li><a class="a" href="">HELP</a></li>
        </ul>
    </nav>
    
    <section>
        <h2 class="textomap">MAPA MUNDIAL</h2>
        <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1fuLG0ki8g888iXodJndkstmje52Toh1-" width="900" height="590"></iframe>

    </section>

    <h2 class="titulosec">
    LOS MAS VISITADOS
    </h2>

   <div class="container">
 
     <div class="item">
         <img src="imagenesofertas/imagen1.jpg" alt="" class="item-img">
            <div class="item-text">
                <h3>CANADA</h3>
                <p>Lorem ipsum dolor </p>
            </div>
     </div>

     <div class="item">
        <img src="imagenesofertas/imagen2.jpg" alt="" class="item-img">
           <div class="item-text">
               <h3>MADAGASCAR</h3>
               <p>Lorem ipsum dolor </p>
           </div>
    </div>

    <div class="item">
        <img src="imagenesofertas/imagen3.jpg" alt="" class="item-img">
           <div class="item-text">
               <h3>ALEMANIA</h3>
               <p>Lorem ipsum dolor </p>
           </div>
    </div>

    <div class="item">
        <img src="imagenesofertas/imagen4.jpg" alt="" class="item-img">
           <div class="item-text">
               <h3>COREA DEL SUR</h3>
               <p>Lorem ipsum dolor </p>
           </div>
    </div>

    <div class="item">
        <img src="imagenesofertas/imagen5.jpg" alt="" class="item-img">
           <div class="item-text">
               <h3>JAPON</h3>
               <p>Lorem ipsum dolor </p>
           </div>
    </div>

    <div class="item">
        <img src="imagenesofertas/imagen6.jpg" alt="" class="item-img">
           <div class="item-text">
               <h3>AUSTRALIA</h3>
               <p>Lorem ipsum dolor </p>
           </div>
    </div>

   </div>
   <?php
include_once "footer.php";
?>

 
</body>

</html>
