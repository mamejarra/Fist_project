<?php require 'header.php'; ?>
<?php
    require 'db.php';
    $id = $_GET['supid'];
    $req = 'DELETE FROM etudiant WHERE Id_Etud = :num';
    $statement = $conn->prepare($req);
   
    $statement->bindvalue(':num', $id,PDO::PARAM_INT);
    $executionok = $statement->execute();
    if($executionok){
       $message = 'utilisateur supprimer';
    }
       else{
           $message = 'echec';
        }
    
    ?>
    <!DOCTYPE html>
<html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <!-- doit etre dans tous les codages de bootstrap cest pour la responsive ie ca etre dans un pc tablette  -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
            <!-- fichier jquery de bootstrap -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <!-- fichier javascript de bootstrap -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

            <title>SUPPRESSION: Resultat</title>
        
        </head>
        <body class ="bg-info">
        <h2>résultat de la suppression</h2>
<p><?= $message; ?> </p>
    <?php require 'footer.php'; ?> 