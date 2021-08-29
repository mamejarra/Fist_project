<?php 
 require 'db.php';
  /*$req = 'SELECT Table_name from INFORMATION_SCHEMA.TABLES WHERE Table_name = :Table_name';*/
  $req = 'SELECT * FROM professeur';
 /*$req = 'SELECT * FROM INFORMATION_SCHEMA.TABLES WHERE Table_name = :Table_name';*/
 $statement = $conn->prepare($req);
 $statement->execute();
 $users = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
        <div class="container" >
            <div class="card mt-5" >
                <div class="card-header" >
                    <h2>les informations de la table professeur:</h2>
                </div>
                    <div class="card-body" >
                        <table class="table table-bordered">
                            <tr>
                                
                                <th>IDENTIFIANT</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Module</th>

                            </tr>
                            <?php foreach($users as $person): ?>
                            <tr>
                                
                                <td> <?= $person->Id_prof ;?></td>
                                <td> <?= $person->nom; ?></td>
                                <td> <?= $person->prenom; ?></td>
                                <td> <?= $person->adresse; ?></td>
                                <td> <?= $person->module; ?></td>

                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
            </div>   
        </div>
<?php require 'footer.php'; ?>        