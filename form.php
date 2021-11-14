<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="iso-8559-1"/>
    <meta name="description" content="html teaching website"/>
    <meta name="keywords" content="html5,css3, web design"/>
    <title>LearnTraveling</title>

    <script src="DocJavascript.js"></script> 
</head>
 
<body>

    <header> 
        <h1 id="maintitle">LearnTraveling</h1>
    </header>

    <div class="formulario">
        <form name="miform" method="post" id="form1">
            <div>
                <div class="casillas"><input type="text" name="name" placeholder="Nombre Completo" required> </div>
                <div class="casillas"><input type="text" name="nationality" placeholder="Nacionalidad" required> </div>
                <div class="casillas"><input type="text" name="language" placeholder="¿Que idioma quieres aprender?" required> </div>
                <div class="casillas"><input type="number" name="age" placeholder="Edad" required> </div>
                <div class="casillas"><input type="number" name="telephone" placeholder="Teléfono"> </div>
                <div class="casillas"><input type="email" name="email" placeholder="E-mail" required> </div>
                <div class="casillas">
                    <button class="subBoton" name="registrar">
                        <p>Enviar</p>
                    </button>
                </div>

                <!-- 
        <input type="text" name="name" id="nombre" placeholder="Nombre completo" >
        <input type="email" name="email" id="email" placeholder="Email" >
        <input type="submit" name="registrar" id="enviar">-->
                
            </div>        
        </form>
    </div>

    <?php
    include("registrar.php");
    ?>

</body>    
</html>

