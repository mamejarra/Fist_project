<?php require 'header.php'; ?>
<div class="container">
        <div class="card mt-5"><BR></BR>
            <div class="card-header">
                <h1>Connexion</h1>
            </div>
            <div class="card-body">
                    <?php if(!empty($message)): ?>
                        <div class="alert alert-success">
                            <?= $message; ?>
                        </div>
                    <?php endif; ?>
 <form method="post" action="connect.php"> 
 <div class="form-group">
     <label for="login">Username:</label>
     <input type="text" class="form-control" id="login" name="login" placeholder="nom d'utilisateur" required>
 </div>
 <div class="form-group">
     <label for="password">Password:</label>
     <input type="password" class="form-control" id="password" name="password" placeholder="mot de passe" required>
 </div>
 <div class="form-group">
        <button type="submit" class="btn btn-info" name="se connecter">se connecter</button>
</div>
 </form>
            </div>
        </div>
    </div>  

<?php require 'footer.php'; ?> 