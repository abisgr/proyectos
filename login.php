<?php
    session_start();
    include 'conexion.php';

    $correo= $_POST['correo'];
    $contrasena= $_POST['contrasena'];
    $contrasena= hash('sha512', $contrasena);

    $login= mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' AND contrasena='$contrasena'");
    
    $numero= mysqli_num_rows($login);

    if(mysqli_num_rows($login) > 0)
    {
        $_SESSION['usuario'] = $correo;
        header("location: inicio.php");
        exit();

    }else{
        echo '
        <script>
         alert("La contraseña o usuario no son correctas");
         window.location= "index.php";
        </script>';
        exit();
    }

    mysqli_close($conexion);
?>