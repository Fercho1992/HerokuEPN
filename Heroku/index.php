<?php 
$conn = new Mysqli($host, $usuario,$cont,$bdd);

if($conn->connect_error)
	die ($conn->connect_error);

echo '<p>Hola Mundo</p>'; 
$url=parse_url(getenv("CLEARDB_DATABASE_URL"));
$server=$url["host"];
$username=$url["user"];
$password=$url["pass"];
?>

