<?php
	session_start();
    require('connexion.php');
    if (!isset($_SESSION['login'])){
        header('location:../..');
    }
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $pnom = $_POST['pnom'];
    $gra = $_POST['gra'];
    $tel = $_POST['tel'];
	$add = $bdd->prepare('INSERT INTO fonctionnaire VALUES(:c,:n,:p,:g,:te )');
	$add->execute(array(':c' => $cin,':n' => $nom,':p' => $pnom,':g' => $gra,':te' => $tel));
	header('location:../fonctionnaires.php');