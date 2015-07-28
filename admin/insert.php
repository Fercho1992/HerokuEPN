<?php
session_start();
if (isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Administracion | La Calera</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Rural_house_32.png -->
    <link rel="shortcut icon" href="image/Rural_house_32.png">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<body>

    <div id="wrapper">

        <!-- NavBar -->
        <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >La Calera</a>
            </div>
            <!-- Items -->
            <ul class="nav navbar-right top-nav ">                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="image/users53.png"> <?php echo $_SESSION['usuario']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        
                        <li>
                            <a href="index.php"><i class="fa fa-fw fa-power-off"></i> Cerrar sesion</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="admin.php"><img src="image/manager3.png"> Administracion</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><img src="image/gears3.png"> Acciones </a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="insert.php">Insertar</a>
                            </li>
                            <li>
                                <a href="update.php">Actualizar</a>
                            </li>

                             <li>
                                <a href="delete.php">Eliminar</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="salary.php"><img src="image/books71.png"> Rol de pago</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">


                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nuevos empleados
                        </h1>
                    </div>
                </div>

                <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-3">
              <span>   </span>
            </div>
            <!--Formulario de inscripcion-->
            <div class="col-md-6">
              <div class="row">
                <form action= "insert.php" class="form-inline" method="post" data-toggle="validator" role="form">
                <br>
                <div class="form-group">
                <label><h1>La Calera</h1></label>
                <br>
                <label><h1>Registro para nuevos empleados</h1></label>
                <br>
                <br>
                <label for="inputName" class="control-label" >Nombre: </label>
                <input type="text" name="nombre" class="form-control"  placeholder="Fernando" required>
                <br>
                <br>
                <label for="inputName" class="control-label">Apellido: </label>
                <input type="text" name="apellido" class="form-control" id="apellido" placeholder="Moya" required>
                <br>
                <br>
                <label for="inputName" class="control-label" >Fecha de Nacimiento: </label>
                <input type="text" name="fechaNacimiento" class="form-control" id="fechaNacimiento" placeholder="01/01/1900" required>
                <br>
                <br>
                <label for="inputName" class="control-label" >Direccion: </label>
                <input type="text" name="direccion" class="form-control" id="direccion" placeholder="Quito" required>
                <br>
                <br>
                <label >Telefono: </label>
                <input type="text" name="telefono" class="form-control" id="telefono" placeholder="099xxxx471" required>
                <br>
                <br>
                <label >Estado Civil: </label> 
                <select class="form-control" name="estado_civil" id="estadoCivil" onchange="crear(this.value)" required>
                  <option value="Soltero">Soltero</option>
                  <option value="Casado">Casado</option>
                  <option value="Viudo">Viudo</option>
                  <option value="Divorciado">Divorciado</option>
                  <option value="Union Libre">Union Libre</option>
                </select>
                <br>
                <br>                                   
                <br>
                <br>
                <input type="submit" class="btn btn-primary" value="Ingresar" name="ingresar" align="center">
                </form>
                <br>
                </form>

                    </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/validator.min.js"> </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
<?php
}
else
{
    echo '<script>alert("primero debes loguearte para ver esta pagina")</script>';
    echo '<script>location.href = "login.php";</script>';
}
?>
