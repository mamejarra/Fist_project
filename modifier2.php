<?php require 'header.php'; ?>
<?php
require 'db.php';
    /*$id = $_GET['Id'];*/
    //la on liste toutes les informations de la table1 dont l'identifiant est donnée en url, num est un numero donnée sur url de la page
    $req = 'SELECT * FROM matiere WHERE Id_mat = :num';
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
                <h2>Ajouter matiere</h2>
            </div>
            <div class="card-body">
                    <?php if(!empty($message)): ?>
                        <div class="alert alert-success">
                            <?= $message; ?>
                        </div>
                    <?php endif; ?>
 <form method="post" action="pagmod2.php">
 <div class="form-group">
 <div class="form-group">
     <input type="hidden" class="form-control" name="modid" value="<?= $person['Id_mat']; ?>">
 </div>
     <label for="id">Identifiant:</label>
     <input type="text" class="form-control" id="id" name="id" value="<?= $person['Id_mat']; ?>">
 </div>
 <div class="form-group">
     <label for="nom_mat">Nom:</label>
     <input type="text" class="form-control" id="nom_mat" name="nom_mat" value="<?= $person['nom_mat']; ?>">
 </div>

 <div class="form-group">
     <label for="nbr_heure">Prénom:</label>
     <input type="text" class="form-control" id="nbr_heure" name="nbr_heure" value="<?= $person['nbr_heure']; ?>">
 </div>
 <div class="form-group">
        <button type="submit" class="btn btn-info" name="enregistrer">Enregistrer les modifications</button>
</div>
 </form>
            </div>
        </div>
    </div>  

<?php require 'footer.php'; ?> 