<?php
    include("conexion.php");
    if (isset($_POST['register'])){
        if(strlen($_POST['nombre']) >=1 &&
        strlen($_POST['fecha']) >=1 &&
        strlen($_POST['ocupacion']) >=1 &&
        strlen($_POST['telefono']) >=1 &&
        strlen($_POST['correo']) >=1 &&
        strlen($_POST['lugar']) >=1 &&
        strlen($_POST['nivel_ingles']) >=1 &&
        strlen($_POST['aptitudes']) >=1 &&
        count($_POST['habilidades']) >0 &&
        count($_POST['lenguajes']) >0 &&
        strlen($_POST['perfil']) >=1 ){
            $nombre = trim($_POST['nombre']);
            $fecha = date("d/m/y");
            $ocupacion = trim($_POST['ocupacion']);
            $telefono = trim($_POST['telefono']);
            $correo = trim($_POST['correo']);
            $lugar = trim($_POST['lugar']);
            $nivel_ingles = trim($_POST['nivel_ingles']);
            $aptitudes = trim($_POST['aptitudes']);
            $habilidades = implode(", ", $_POST['habilidades']);
            $lenguajes = implode(", ", $_POST['lenguajes']);
            $perfil = trim($_POST['perfil']);
            $consulta = "INSERT INTO datos (nombre, fecha, ocupacion, telefono, correo, lugar, nivel_ingles, aptitudes, habilidades, lenguajes, perfil)
            VALUES('$nombre', '$fecha', '$ocupacion', '$telefono', '$correo', '$lugar', '$nivel_ingles', '$aptitudes', '$habilidades', '$lenguajes', '$perfil')";
         
            $resultado = mysqli_query($conex, $consulta);
            if($resultado){
                ?>
                    <h3 class="success">Tu registro se ha completado</h3>
                <?php
            } else{
                ?>
                    <h3 class="error">Ocurrio un error</h3>
                <?php
            }
        }else{
            ?>
                <h3 class="error">Llena todos los campos</h3>
            <?php
        }
    }
?>