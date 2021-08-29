<?php
require 'db.php';

if(isset($_POST['enregistrer'])){
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $heure = $_POST['heure'];
    $sql_register =$conn->prepare("INSERT INTO matiere(Id_mat,nom_mat,nbr_heure) VALUES (:id,:nom,:heure)");
    $sql_register ->bindValue(':id', $id, PDO::PARAM_INT);
    $sql_register ->bindValue(':nom', $nom, PDO::PARAM_STR);
    $sql_register ->bindValue(':heure', $heure, PDO::PARAM_STR);
    $sql_register->execute();
}

print'ok';
?>
