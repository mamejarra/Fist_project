<?php
 require 'db.php';
 
 /* Exécution de l'inscription */
if(isset($_POST['enregistrer'])){

    // Récupération des données utilisateur
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $classe = $_POST['classe'];
    // On insère les informations de l'utilisateur dans la base de données
    $sql_register = $conn->prepare("INSERT INTO etudiant (Id_Etud, nom, prenom, adresse, classe) values (:id, :nom,:prenom,:adresse,:classe)");
    $sql_register->bindValue(':id', $id, PDO::PARAM_INT);
    $sql_register->bindValue(':nom', $nom, PDO::PARAM_STR);
    $sql_register->bindValue(':prenom', $prenom, PDO::PARAM_STR);
    $sql_register->bindValue(':adresse', $adresse, PDO::PARAM_STR);
    $sql_register->bindValue(':classe', $classe, PDO::PARAM_STR);
    $sql_register->execute();

}
print'ok';
?>