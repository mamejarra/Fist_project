<?php require 'header.php'; ?>
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
 <form method="post" action="insert1.php">
 <div class="form-group">
     <label for="id">Identifiant:</label>
     <input type="text" class="form-control" id="id" name="id" >
 </div>
 <div class="form-group">
     <label for="nom">Nom:</label>
     <input type="text" class="form-control" id="nom" name="nom" >
 </div>

 <div class="form-group">
     <label for="prenom">Prénom:</label>
     <input type="text" class="form-control" id="prenom" name="prenom" >
 </div>
 <div class="form-group">
     <label for="adresse">Adresse:</label>
     <input type="text" class="form-control" id="adresse" name="adresse" >
 </div>
 <div class="form-group">
     <label for="classe">Classe:</label>
     <input type="text" class="form-control" id="classe" name="classe" >
 </div>
 <div class="form-group">
        <button type="submit" class="btn btn-info" name="enregistrer">Enregistrer</button>
</div>
 </form>
            </div>
        </div>
    </div>  

<?php require 'footer.php'; ?> 