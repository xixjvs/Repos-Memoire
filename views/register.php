<!-- Page register -->

<div class="registration-form" style="background: #7d321be3">
        <?php require_once("views/includes/getMessage.php"); ?>

        <form action="" method="post" style="background-color: rgb(255 255 255 / 0%);">
            <div class=" text-center mb-4" style="color: #fff;">
                <h4>Je crée mon compte</h4>
            </div>
    
           
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control item" placeholder="Prénom(s)" name="prenom" id="prenom" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control item" placeholder="Nom" name="nom" id="nom" required>
                    </div>
                </div>
            </div>
    

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control item" placeholder="Téléphone" name="tel" id="telephone" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control item" placeholder="Adresse" name="adresse" id="adresse" required>
                    </div>
                </div>
            </div>
            

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="email" class="form-control item" placeholder="Email" name="email" id="email" required>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control item" placeholder="Mot de passe" name="mdp" id="mdp" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="password" class="form-control item" placeholder="Répétez le mot de passe" name="mdpConfirm" id="mdpConfirm" required>
                    </div>
                </div>
            </div>
    
            
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="form-group">
                        <button type="submit" name="register" class="btn btn-block btn-success create-account mb-4"><i class="fa-solid fa-check"></i> Je m'inscris </button>
                        <a href="?page=connexion" class="text-decoration-none" style="color: #fff;">Vous avez dejà un compte? Connectez-vous</a>
                    </div>
                </div>
            </div>
        </form>
</div>