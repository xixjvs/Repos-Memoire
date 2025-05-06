<section class="accomodation_area section_gap mb-5 pt-5" style="margin-top: 90px;">
    <?php require_once("includes/getMessage.php"); ?>
    <div class="container row accordion " id="profilAccordion">
            <p class="d-flex flex-column col-md-3">
                <a class="btn btn-primary" data-toggle="collapse" href="#info" role="button" aria-expanded="false" aria-controls="info">
                    Mes informations
                </a>

                <!-- <a class="btn btn-primary mt-3" data-toggle="collapse" href="#demande" role="button" aria-expanded="false" aria-controls="demande">
                    Mes demandes
                </a> -->

                <a class="btn btn-primary mt-3" data-toggle="collapse" href="#password" role="button" aria-expanded="false" aria-controls="password">
                    Mot de passe
                </a>

                <a class="btn btn-outline-dark mt-3" href="?page=deconnexion">
                    Deconnexion
                </a>
                
            </p>
            <div class="col-md-9">
                <div class="collapse show" id="info" data-parent="#profilAccordion">
                    <div class="card card-body">
                        <h5>Mes informations</h5>
                        <form action="" method="post">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="">Prenom</label>
                                    <input type="text" value="<?= $user->prenom?>" name="prenom" required class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Nom</label>
                                    <input type="text" value="<?= $user->nom?>" name="nom" required class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Adresse</label>
                                    <input type="text" value="<?= $user->adresse?>" name="adresse" required class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Telephone</label>
                                    <input type="text" value="<?= $user->tel?>" name="tel" required class="form-control">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="">Email</label>
                                    <input type="text" value="<?= $user->email?>" name="email" required class="form-control">
                                </div>
                            </div>
                            <button name="modifier" type="submit" class=" btn btn-outline-warning">Modifier</button>
                        </form>
                    </div>
                </div>

                <!-- <div class="collapse" id="demande" data-parent="#profilAccordion">
                    <div class="card card-body">
                        <h5>Mes demandes</h5>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Reference</th>
                                    <th>Type de demande</th>
                                    <th>Date de demande</th>
                                    <th>Heure de demande</th>
                                    <th>Montant</th>
                                    <th>Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ref1</td>
                                    <td>Messe simple</td>
                                    <td>12/12/2024</td>
                                    <td>18:30</td>
                                    <td>4000 FCFA</td>
                                    <td>valider</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div> -->

                <div class="collapse" id="password" data-parent="#profilAccordion">
                    <div class="card card-body">
                        <h5>Je change mon mot de passe</h5>
                        <form action="" method="post">
                            <div class="row">
                                <div class="form-group col-md-4">
                                    <label for="">Mot de passe actuel</label>
                                    <input type="password" name="password" required class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Nouveau mot de passe</label>
                                    <input type="password" name="newpassword" required class="form-control">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Confirmer le mot de passe</label>
                                    <input type="password" name="passwordconfirm" required class="form-control">
                                </div>
                            </div>
                            <button type="submit" name="editpassword" class="btn btn-outline-warning text-center">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>
            
    </div>
</section>