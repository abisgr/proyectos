<?php

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'<script> 
        alert("No has iniciado sesion")
        window.location= "index.php";
            </script>';
        session_destroy();
        die();
    }

?>

   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bienvenido</title>

    </head>
    <body>
        <h1>Hola wapo</h1>
        <a href="logout.php">Cerrar sesion</a>
        
    </body>
    </html>