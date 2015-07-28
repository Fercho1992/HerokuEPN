<?php
session_start();
if (isset($_SESSION['usuario']))
{
    echo '<script>location.href = "admin.php";</script>';
}
else
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Login</title>
<link rel="stylesheet" href="css/estilo.css" />
<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--font-awesome-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!--prettyPhoto-->
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet">
    <!--main-->
    <link href="css/main.css" rel="stylesheet">
    <!-- startedTemplate CSS -->
    <link href="css/startedTemplate.css" rel="stylesheet">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">
</head>
<body>
<div class="contenedor">
    <h2>Login</h2>
   
    <div id="formulario">
        <form method="POST" action="return false" onsubmit="return false">
            <div id="resultado"></div>
            <p><input type="text" name="user" id="user" value="" placeholder="usuario" class="form-control"></p>
            <p><input type="password" name="pass" id="pass" value="" placeholder="" class="form-control"></p>
            <p><button class="btn btn-primary" onclick="Validar(document.getElementById('user').value, document.getElementById('pass').value);">Iniciar sesion</button></p>
        </form>

        <script>
        function Validar(user, pass)
        {
            $.ajax({
                url: "validar.php",
                type: "POST",
                data: "user="+user+"&pass="+pass,
                success: function(resp){
                    $('#resultado').html(resp)
                }       
            });
        }
        </script>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php

}
?>
