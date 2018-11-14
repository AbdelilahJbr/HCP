<?php
	session_start();
	require('script/connexion.php');
	if ($_SESSION['login']){
		$bdd->exec('UPDATE pret SET date_retour = NOW() WHERE id = \'' . $_GET['id'] . '\'  ');
		header('location:prets.php');
	}
	else {
		header('location:../index.php');
	}