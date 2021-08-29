<?php

    // Récupération des données utilisateur
    $login = $_POST['login'];
    $password = $_POST['password'];

    if($login=="MameDiarra" && $password=="pass"){
        header('Location: table.php');

    }else{
        print 'la connexion est impossible';

    }


?>