<?php if(isset($_SESSION["user"])) : ?>

<section class="p-3 p-md-4 p-xl-9" style="background-color: #f7ddb5;">
    <div class="container my-5 mt-5 pt-5">
        <?php require_once("views/includes/getMessage.php"); ?>

        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <h2 class="text-center mb-4">Ma demande de <strong><?= ucfirst($c->nom) ?></strong></h2>
                <div class="text-end mt-2  mb-4">
                    <a href="?page=listesMessesAdmin" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i>Retour</a>
                </div>
                <form method="post">
                    <!-- Champs pour les informations du demandeur -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom demandeur " required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom demandeur" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" id="telephone" name="tel" placeholder="Téléphone demandeur" required>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse demandeur"required>
                        </div>
                    </div>


                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email demandeur" required>
                    </div>

                    <!-- Champs demande de messe -->

                    <!-- <div class="form-group">
                        <label for="number"> Nombre de demandes :</label>
                        <input type="number" class="form-control" id="nombre-demandes" name="nombre-demandes" placeholder="Nombre de demandes" min="1">
                    </div> -->

                    <div class="form-group">
                        <label for="date">Date<span class="text-danger">*</span> :</label>
                        <input type="text" class="form-control checkin-date" id="date" name="date" value="<?= avoirInput("date")?>" required>
                    </div>

                    <div class="form-group">
                        <label for="heure">Heure<span class="text-danger">*</span> :</label>
                        <!-- <input type="time" name="heure" required class="form-control"> -->
                        <select class="form-control" id="heure" name="heure" required>
                            <option value=""disabled selected>Veuillez choisir une heure</option>
                            <option value="06:45">06:45</option>
                            <option value="07:30">07:30</option>
                            <option value="09:30">09:30</option>
                            <option value="11:00">11:00</option>
                            <option value="18:30">18:30</option>
                        </select>
                    </div>

                    <!-- <div class="form-group">
                        <label for="type-demande">Type de demande de messe :</label>
                        <select class="form-control" id="type-demande" name="type-demande">
                            <option value="Choix-demande">Faites votre choix</option>
                            <option value="Messe-simple">Messes simples</option>
                            <option value="Messe-requiem">Messes Requiem</option>
                            <option value="ESM">Enterrement sans messe</option>
                            <option value="EAM">Enterrement avec messe</option>
                            <option value="MAM">Mariages avec messe</option>
                            <option value="MSM">Mariages sans messe</option>
                            <option value="Neuvaines">Neuvaines</option>
                            <option value="Trentaines">Trentaines</option>
                            <option value="Autres">Autres intentions</option>
                        </select>
                    </div> -->

                    <div class="form-group">
                        <label for="description">Description de la demande<span class="text-danger">*</span> :</label>
                        <textarea class="form-control" id="description" name="description" rows="4" required></textarea>
                    </div>
                    <button type="submit" name="validerDemande" class="btn btn-success btn-block">Valider</button>
                </form>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

