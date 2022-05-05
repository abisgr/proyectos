<?php

    session_start();
    if(isset($_SESSION['usuario'])){
        header("location: inicio.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y registro</title>
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap" rel="stylesheet"> 
</head>

<body>
    <main>

        <div class="contenedorcajas">

            <div class="cajatrasera">
                <div class="cajalogin">
                    <h3>Ya tengo una cuenta</h3>
                    <p>Iniciar sesion en el sitio</p>
                    <button id="btn_login">Iniciar Sesion</button>
                </div>
                <div class="cajaregistro">
                    <h3>Crear una cuenta</h3>
                    <p>Deseo crear una nueva cuenta</p>
                    <button id="btn_register">Registrarse</button>
                </div>
            </div>



            <div class="contenedor_login_register">

                <form action="login.php" method="POST" class="formulario_login">
                    <h2>Iniciar sesion</h2>
                    <input type="text" placeholder="Email" name="correo">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>
                
                <form action="registro_usuarios.php" method="POST" class="formulario_register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nombre Completo" name="nombre">
                    <input type="text" placeholder="Email" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>

                </form>

            </div>


        </div>


    </main>
    <script src="assets/js/script.js" ></script> 
</body>
</html>