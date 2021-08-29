<?php 
 require 'db.php';
  /*$req = 'SELECT Table_name from INFORMATION_SCHEMA.TABLES WHERE Table_name = :Table_name';*/
 $req = 'SELECT * FROM '.$_GET['id'].'';
 $statement = $conn->prepare($req);
 $statement->execute();
 $users = $statement->fetchAll(PDO::FETCH_OBJ);
 $statement->closeCursor();
 ?>
<?php require 'header.php'; ?>
        <div class="container" >
            <div class="card mt-5" >
                <div class="card-header" >
                </div>
                    <div class="card-body" >
                        <table class="table table-bordered">
                            <tr>
                            <?php if($_GET['id']=='etudiant'){?>
                                <h2>les informations de la table etudiant :</h2><br>
                                <th>IDENTIFIANT</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Classe</th>
                                <th>Action</th>
                                <a href="ajouter.php?id=<?= $_GET['id']=='etudiant'; ?>" class="btn btn-info">Ajouter un étudiant</a><br><br>


                                <?php } elseif($_GET['id']=='professeur'){?>
                                    <h2>les informations de la table professeur :</h2><br>
                                <th>IDENTIFIANT</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Adresse</th>
                                <th>Module</th>
                                <th>Action</th>
                                <a href="ajouter1.php?id=<?= $_GET['id']=='professeur'; ?>" class="btn btn-info">Ajouter un professeur</a><br><br>

                                <?php } elseif($_GET['id']=='matiere'){?>
                                    <h2>les informations de la table matiere :</h2><br>
                                <th>IDENTIFIANT</th>
                                <th>Nom de la matière</th>
                                <th>Nombre d'heures</th>
                                <th>Action</th>
                                <a href="ajouter2.php?id=<?= $_GET['id']=='matiere'; ?>" class="btn btn-info">Ajouter une matière</a><br><br>

                                <?php } ?>
                            </tr>

                            <?php foreach($users as $person): ?>
                            <tr>
                            <?php if($_GET['id']=='etudiant'){?>

                                <td> <?= $person->Id_Etud ;?></td>
                                <td> <?= $person->nom; ?></td>
                                <td> <?= $person->prenom; ?></td>
                                <td> <?= $person->adresse; ?></td>
                                <td> <?= $person->classe; ?></td>
                                <td>

                                    <a href="modifier.php?modid=<?= $person->Id_Etud; ?>" class="btn btn-info">modifier</a>
                                    <a onclick="return confirm ('Are you sure to want delete the entry?')" href="supprimer.php?supid=<?= $person->Id_Etud; ?>" class="btn btn-danger">supprimer</a>
                                </td>
                                <?php } elseif($_GET['id']=='professeur'){?>

                                    <td> <?= $person->Id_prof ;?></td>
                                <td> <?= $person->nom; ?></td>
                                <td> <?= $person->prenom; ?></td>
                                <td> <?= $person->adresse; ?></td>
                                <td> <?= $person->module; ?></td>
                                <td>

                                    <a href="modifier1.php?modid=<?= $person->Id_prof; ?>" class="btn btn-info">modifier</a>
                                    <a onclick="return confirm ('Are you sure to want delete the entry?')" href="supprimer1.php?supid=<?= $person->Id_prof; ?>" class="btn btn-danger">supprimer</a>
                                </td>
                                 <?php } elseif($_GET['id']=='matiere'){?>
                                 
                                <td> <?= $person->Id_mat ;?></td>
                                <td> <?= $person->nom_mat; ?></td>
                                <td> <?= $person->nbr_heure; ?></td>
                                <td>

                                    <a href="modifier2.php?modid=<?= $person->Id_mat; ?>" class="btn btn-info">modifier</a>
                                    <a onclick="return confirm ('Are you sure to want delete the entry?')" href="supprimer2.php?supid=<?= $person->Id_mat; ?>" class="btn btn-danger">supprimer</a>
                                </td>
                                    <?php } ?>
                            </tr>
                            <?php endforeach;?>
                        </table>
                    </div>
            </div>   
        </div>
<?php require 'footer.php'; ?>        