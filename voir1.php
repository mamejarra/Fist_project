<?php 
 require 'db.php';
  /*$req = 'SELECT Table_name from INFORMATION_SCHEMA.TABLES WHERE Table_name = :Table_name';*/
  $req = 'SELECT * FROM matiere';
 /*$req = 'SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE Table_name = :Table_name';*/
 $statement = $conn->prepare($req);
 $statement->execute();
 $users = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
        <div class="container" >
            <div class="card mt-5" >
                <div class="card-header" >
                    <h2>les informations de la table matiere:</h2>
                </div>
                    <div class="card-body" >
                        <table class="table table-bordered">
                            <tr>
                                
                                <th>IDENTIFIANT</th>
                                <th>Nom de la matière</th>
                                <th>Nombre d'heures</th>

                            </tr>
                            <?php foreach($users as $person): ?>
                            <tr>
                                
                                <td> <?= $person->Id_mat ;?></td>
                                <td> <?= $person->nom_mat; ?></td>
                                <td> <?= $person->nbr_heure; ?></td>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
            </div>   
        </div>
<?php require 'footer.php'; ?>        