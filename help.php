<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include_once "nav.php";
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleshelp.css">
    <script src="https://kit.fontawesome.com/3c8ce09c45.js" crossorigin="anonymous"></script>
    <title>LearnTraveling</title>
</head>

<body>

    <!-- caja para escribir los problemas presentado con la página -->
    <div class="problemsBox">
        <h2 id="problemText">Cuentanos tu problema</h2>
        <input type="text" name="complains" id="complainBox" placeholder="Escribe aquí...">
        <button type="submit" id="problemsButton">Enviar</button>
    </div>

    <button class="registrarse">
        <a href="form.php" id="sign_up">¡Quiero registrarme!</a>
    </button>

    <?
    include_once "registrar.php";

    print_r($consulta);
    // echo $_POST['name'];
    ?>

    <!-- contacto con correo electrónico -->
    <div class="problemsBox">
        <h3>Si aún tienes problemas escríbenos a este correo:</h3>
        <div class="gmail">
            <i class="fas fa-envelope"></i>
        </div>
        <address><a href="mailto:fabianguzzman@gmail.com">LearnTraveling@gmail.com</a></address>
    </div>
    <!-- calificación de la página -->
    <div class="problemsBox  rate">
        <p>Calificanos</p>
        <div class="star">
            <ul>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
                <li><i class="fas fa-star"></i></li>
            </ul>
        </div>
    </div>
    <!-- ACÁ VAN LOS ICONOS DE LAS ESTRELLAS -->

    <?php
    include_once "footer.php";
    ?>

</body>

</html>