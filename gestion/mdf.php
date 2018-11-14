<?php
    session_start();
    require('script/connexion.php');
    if (!isset($_SESSION['login'])){
        header('location:..');
    }
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $pnom = $_POST['pnom'];
    $gra = $_POST['gra'];
    $tel = $_POST['tel'];
    $bdd->exec('UPDATE fonctionnaire SET nom = \'' . $nom . '\' , cin = \'' . $cin . '\' , tel = \'' . $tel . '\' , grade = \'' . $gra . '\', prenom = \'' . $pnom . '\' WHERE cin = \'' . $_GET['cin'] . '\'  ');
    header('location:fonctionnaires.php');