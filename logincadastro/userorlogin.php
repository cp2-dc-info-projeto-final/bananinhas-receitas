<?php
session_start();
	if($_SESSION['email'] != null){
		header("Location: usuarioPage.php");
	}
	if($_SESSION['email'] == null){
		header("Location: loginCasdastro.php");
	}

?>