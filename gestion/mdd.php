<?php
    session_start();
    require('script/connexion.php');
    if (!isset($_SESSION['login'])){
        header('location:..');
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
    $bdd->exec('UPDATE document SET n_inventaire = \'' . $n_inventaire . '\' , titre = \'' . $titre . '\' , auteur = \'' . $auteur . '\' , type = \'' . $type . '\' WHERE n_inventaire = \'' . $_GET['n_inventaire'] . '\'  ');
    header('location:documents.php');