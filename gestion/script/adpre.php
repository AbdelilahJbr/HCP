<?php
	session_start();
    require('connexion.php');
    if (!isset($_SESSION['login'])){
        header('location:..');
    }

    $fon = $bdd->query('SELECT count(*) as nf FROM fonctionnaire WHERE cin = \''.$_POST['cin'].'\'')->fetch();
    $doc = $bdd->query('SELECT count(*) as nd FROM document WHERE n_inventaire = \''.$_POST['nid'].'\'')->fetch();
    if ($fon['nf'] == 1){
        if($doc['nd'] == 1){
            $add = $bdd->prepare('INSERT INTO pret(cin,n_inventaire) VALUES(:n,:t)');
            $add->execute(array(':n' => $_POST['cin'],':t' => $_POST['nid']));
            header('location:../index.php');
        }
        else{
            header('location:../addpret.php?err=d');    
        }
    }
    else {
        header('location:../addpret.php?err=f');
    }
	