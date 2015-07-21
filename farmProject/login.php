<!--BloquePHP-->
<?php
// Evitar los warnings para variables no definidas!!!
$err = isset($_GET['error']) ? $_GET['error'] : null ;

//La función isset() nos permite comprobar si una variable está 
//definida, devolviendo true si lo estuviese. Es decir si la variable 
//fué instanciada  previamente utilizada o separada su espacio en memoria
// (declarada).

?>
<!--Fin BloquePHP-->

<!--BloqueHTML-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | La Calera</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!--main-->
    <link href="css/main.css" rel="stylesheet">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <!--Login-->
    <section id="registration" class="container">
        <form name="users" class="center" role="form" action="sessionInit.php" method="post">
        <!--BloquePHP-->
        <?php if($err==1){
                echo "Usuario o Contraseña Erróneos <br />";
            }
            if($err==2){
                echo "Debe iniciar sesion para poder acceder el sitio. <br />";
            }
            ?>
            <!--Fin BloquePHP-->
            <fieldset class="registration-form">
                <div class="form-group">
                    <input type="text" id="email" maxlength="25" name="email" placeholder="e-mail" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" maxlength="5" id="password" name="password" placeholder="contraseña" class="form-control">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Iniciar sesion</button>
                </div>
            </fieldset>
        </form>
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<!--Fin BloqueHTML-->