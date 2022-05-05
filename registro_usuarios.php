<?php

    include 'conexion.php';

    $nombre= $_POST['nombre'];
    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];
    $usuario= $_POST['usuario'];
    $contrasena= hash("sha512", $contrasena);

    $query= "INSERT INTO usuarios(nombre,correo,usuario,contrasena)
             VALUES ('$nombre', '$correo', '$usuario', '$contrasena')";

    
    $verificar_correo= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    $verificar_usuario= mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario='$usuario'");


    if(mysqli_num_rows($verificar_correo) or mysqli_num_rows($verificar_usuario) > 0){
        $numero= mysqli_num_rows($verificar_correo);
        echo "<script type='text/javascript'>alert('$numero');</script>";
        echo '
        <script>
            alert("El correo ya existe");
            window.location= "index.php";
        </script>
        ';
        exit();
    }

    $insertar= mysqli_query($conexion, $query);

    if($insertar){
        echo '
        <script>
         alert("Usuario registrado correctamente");
         window.location= "index.php";
        </script>';
    }

    mysqli_close($conexion);

?>