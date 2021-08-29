<?php require 'header.php'; ?>
<?php
require 'db.php';
    /*$id = $_GET['Id'];*/
    //la on liste toutes les informations de la table1 dont l'identifiant est donnée en url, num est un numero donnée sur url de la page
    $req = 'SELECT * FROM etudiant WHERE Id_Etud = :num';
    //préparation de la requete
    $statement = $conn->prepare($req);
    //on va relier le parametre num a la valeur $_GET['numid'] qui est donné en url 
    $statement->bindvalue(':num', $_GET['modid'],PDO::PARAM_INT);
    //execution de la requete
    $statement->execute();
    //on récupere le resultat de la requete
    $person = $statement->fetch();
    //var_dump permet dafficher les information du resultat
    //var_dump($person);
    ?>
<div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Ajouter un etudiant</h2>
            </div>
            <div class="card-body">
                    <?php if(!empty($message)): ?>
                        <div class="alert alert-success">
                            <?= $message; ?>
                        </div>
                    <?php endif; ?>
 <form method="post" action="pagmod.php">
 <div class="form-group">
 <div class="form-group">
     <input type="hidden" class="form-control" name="modid" value="<?= $person['Id_Etud']; ?>">
 </div>
     <label for="id">Identifiant:</label>
     <input type="text" class="form-control" id="id" name="id" value="<?= $person['Id_Etud']; ?>">
 </div>
 <div class="form-group">
     <label for="nom">Nom:</label>
     <input type="text" class="form-control" id="nom" name="nom" value="<?= $person['nom']; ?>">
 </div>

 <div class="form-group">
     <label for="prenom">Prénom:</label>
     <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $person['prenom']; ?>">
 </div>
 <div class="form-group">
     <label for="adresse">Adresse:</label>
     <input type="text" class="form-control" id="adresse" name="adresse" value="<?= $person['adresse']; ?>">
 </div>
 <div class="form-group">
     <label for="classe">Classe:</label>
     <input type="text" class="form-control" id="classe" name="classe" value="<?= $person['classe']; ?>">
 </div>
 <div class="form-group">
        <button type="submit" class="btn btn-info" name="enregistrer">Enregistrer les modifications</button>
</div>
 </form>
            </div>
        </div>
    </div>  

<?php require 'footer.php'; ?> 