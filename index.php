<?php session_start();

if (isset($SESSION['usuario'])) {
	header('Location: contenido.php');
} else{
	header('Location: registrate.php');
}


?>
