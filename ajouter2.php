<?php require 'header.php'; ?>
<div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <h2>Ajouter une matière</h2>
            </div>
            <div class="card-body">
                    <?php if(!empty($message)): ?>
                        <div class="alert alert-success">
                            <?= $message; ?>
                        </div>
                    <?php endif; ?>
 <form method="post" action="insert3.php">
 <div class="form-group">
     <label for="id">Identifiant:</label>
     <input type="text" class="form-control" id="id" name="id" >
 </div>
 <div class="form-group">
     <label for="nom">Nom de la matière:</label>
     <input type="text" class="form-control" id="nom" name="nom" >
 </div>

 <div class="form-group">
     <label for="heure">Nombre d'heures:</label>
     <input type="text" class="form-control" id="heure" name="heure" >
 </div>
 <div class="form-group">
        <button type="submit" class="btn btn-info" name="enregistrer">Enregistrer</button>
</div>
 </form>
            </div>
        </div>
    </div>  

<?php require 'footer.php'; ?> 