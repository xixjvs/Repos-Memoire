<?php if(isset($_SESSION["user"])) : ?>
    
    <section class="p-3 p-md-4 p-xl-9" style="background-color: #f7ddb5;">
        <div class="container my-5 mt-5 pt-5">
        <?php require_once("views/includes/getMessage.php"); ?>

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <h2 class="text-center mb-4">Ma demande de <strong><?= ucfirst($c->nom) ?> </h2>
                    <form method="post">
                        <!-- <div class="form-group">
                            <label for="number"> Nombre de demandes :</label>
                            <input type="number" class="form-control" id="nombre-demandes" name="nombre-demandes" placeholder="Nombre de demandes" min="1">
                        </div> -->

                        <div class="text-end mt-2">
                            <a href="?page=listesMesses" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i>Retour</a>
                        </div>

                        <div class="form-group">
                            <label for="date">Date<span class="text-danger">*</span> : </label>
                            <input type="text" class="form-control checkin-date" id="date" name="date" value="<?= avoirInput("date") ?>" required>
                        </div>

                        <div class="form-group">
                            <label for="heure">Heure<span class="text-danger">*</span> :</label>
                            <select class="form-control" id="heure" name="heure" required>
                                <option value=""disabled selected>Veuillez choisir une heure</option>
                                <option value="06:45">06:45</option>
                                <option value="07:30">07:30</option>
                                <option value="09:30">09:30</option>
                                <option value="11:00">11:00</option>
                                <option value="18:30">18:30</option>
                            </select>
                        </div>

      
                        <div class="form-group">
                            <label for="description">Description de la demande<span class="text-danger">*</span> :</label>
                            <textarea class="form-control" id="description" name="description" rows="4"required></textarea>
                        </div>
                        <button type="submit" name="validerDemande" class="btn btn-success btn-block" >Valider</button>
                    </form>
                </div>
            </div>
    </div>
</section>
<?php endif; ?>




