<?php
//Se llama a la clase que hace la conexion a la base de datos

require'class/config.php';

//Se llama a la clase Usuarios para realizar el inicio de sesion

require'class/users.php';

//Se llama a la clase que ejecutará los queries de Consulta, Adición y Eliminación

require'class/dbactions.php';

//Se llama a la clase encargada de las sesiones de usuarios

require'class/sessions.php';

//Instanciamiento 

//Objeto de la clase Connection

$objConn = new Connection();

//Objeto de la clase Users

$objUser = new Users();

//llamamos la funcion que nos conecta a la base de datos
$objConn->get_connected();
//function que realiza la verificación de usuarios e inicio de sesion
$objUser->login_in();
?>