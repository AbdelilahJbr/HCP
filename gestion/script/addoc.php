<?php
	session_start();
    require('connexion.php');
    if (!isset($_SESSION['login'])){
        header('location:../..');
    }
    $n_inventaire = $_POST['niv'];
    $titre = $_POST['tit'];
    $auteur = $_POST['aut'];
    if ($_POST['type'] == "Autre"){
    	$type = $_POST['typau'];	
    }
    else {
    	$type = $_POST['type'];
    }
	$add = $bdd->prepare('INSERT INTO document VALUES(:n,:t,:a,:ty)');
	$add->execute(array(':n' => $n_inventaire,':t' => $titre,':a' => $auteur,':ty' => $type));
	header('location:../documents.php');