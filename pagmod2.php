<?php
require 'db.php';
//préparation de la requete
$statement = $conn->prepare('UPDATE matiere set Id_mat=:id, nom_mat=:nom_mat, nbr_heure=:nbr_heure  WHERE Id_mat = :num');
//on va relier le parametre num a la valeur $_GET['numid'] qui est donné en url 
$statement->bindvalue(':num', $_POST['modid'],PDO::PARAM_INT);
$statement->bindvalue(':id', $_POST['id'],PDO::PARAM_INT);
$statement->bindvalue(':nom_mat', $_POST['nom_mat'],PDO::PARAM_STR);
$statement->bindvalue(':nbr_heure', $_POST['nbr_heure'],PDO::PARAM_STR);

 //execution de la requete
 $executionok = $statement->execute();
 if($executionok){
    $message = 'utilisateur a bien été modifié';
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

            <title>MODIFICATION: Resultat</title>
        
        </head>
        <body class ="bg-info">
        <h2>résultat de la modification</h2>
<p><?= $message; ?> </p>
<?php require 'footer.php'; ?> 