<?php
	session_start();
	require('gestion/script/connexion.php');
	$nom = strtolower(htmlspecialchars($_POST['email']));
	$psw = htmlspecialchars($_POST['pass']);

	$rep = $bdd->query('SELECT count(*) AS nb FROM login WHERE email = \'' . $nom . '\' AND password = \'' . $psw . '\'  ')->fetch();

	if ($rep[nb]){
		$_SESSION['login'] = true;
		header('location:gestion');
	}
	else{
		header('location:index.php?err=y');	
	}
?>

