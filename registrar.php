<?php

include ("con_dp.php");

#verificar conexión
//   if($conex){
//       echo "todo bien";
//   }else{
//       echo "ups sorry!";
//   }

#verificar si la variable tiene información
if(isset($_POST['registrar'])){
    if(strlen($_POST['name']) >= 1 && strlen($_POST['nationality']) >= 1
    && strlen($_POST['language']) >= 1 && !empty($_POST['age'])
    && !empty($_POST['telephone']) && strlen($_POST['email']) >= 1  ){

        $name = trim($_POST['name']); //elimina espacios
        $nationality = trim($_POST['nationality']); 
        $language = trim($_POST['language']); 
        $age = trim($_POST['age']); 
        $telephone = trim($_POST['telephone']); 
        $email = trim($_POST['email']);
        $fecha_reg = date("d/m/y");
        $consulta = "INSERT INTO datos (nombre, nacionalidad, idioma, edad, telefono, email, fecha_reg) VALUES ('$name','$nationality','$language','$age','$telephone','$email','$fecha_reg')"; //se insertan los datos en la tabla
        $resultado = mysqli_query($conex, $consulta); //se envian las variables

        if($resultado){
            ?>
            <h3 class="ok">Usuario registrado</h3>
            <script>window.location.href = 'help.php'</script>
            <?php
        }else{
            ?>
            <h3 class="bad">Usuario no registrado</h3>

            <?php
        }
    }
    else{
        ?>
        <h3 class="bad">Diligenciar todos los campos</h3>
        <?php
    }
}

?>