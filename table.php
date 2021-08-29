<?php 
 require 'db.php';
 $req = 'SELECT Table_name from INFORMATION_SCHEMA.TABLES';
 $statement = $conn->prepare($req);
 $statement->execute();
 $users = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
        <div class="container" >
            <div class="card mt-5" >
                <div class="card-header" >
               
                    <h2>Les tables de votre base de données ECOLE sont:</h2><br><br>
                </div>
                    <div class="card-body" >
                        <table class="table table-bordered">
                           
                            <?php foreach ($users as $name): ?>

                            <tr>    
                                <td> <?= $name->Table_name;?></td>

                                <td>
                                    <a href="voir.php?id=<?= $name->Table_name; ?>" class="btn btn-info">Voir plus</a>

                                </td>
                            </tr>

                            <?php endforeach;?>
                        </table>
                    </div>
            </div>   
        </div>
<?php require 'footer.php'; ?>        