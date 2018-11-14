<?php
	session_start();
	require('script/connexion.php');
	if ($_SESSION['login']){
		if (isset($_GET['id'])){
			$bdd->exec('DELETE FROM pret WHERE id = ' . $_GET['id']);
			header('location:prets.php');
		}
		elseif (isset($_GET['cin'])){
			$bdd->exec('DELETE FROM fonctionnaire WHERE cin = \'' . $_GET['cin'] .'\'');
			header('location:fonctionnaires.php');	
		}
		elseif (isset($_GET['n_inventaire'])){
			$bdd->exec('DELETE FROM document WHERE n_inventaire = \'' . $_GET['n_inventaire'] .'\'');
			header('location:documents.php');
		}
	}
	else {
		header('location:../index.php');
	}