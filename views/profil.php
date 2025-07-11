<section class="accomodation_area section_gap mb-5 pt-5" style="margin-top: 90px;">
    <?php require_once("includes/getMessage.php"); ?>
    <div class="container row accordion " id="profilAccordion">
            <p class="d-flex flex-column col-md-3">
                <a class="btn btn-primary" data-toggle="collapse" href="#info" role="button" aria-expanded="false" aria-controls="info">
                    Mes informations
                </a>

                <a class="btn btn-primary mt-3" data-toggle="collapse" href="#demande" role="button" aria-expanded="false" aria-controls="demande">
                    Mes demandes
                </a>

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

                <div class="collapse" id="demande" data-parent="#profilAccordion">
                    <div class="card card-body">
                        <h5 class="mb-3">Mes demandes</h5>
                        <!-- Table responsive -->
                        <div class="table-responsive">
                            <table class="table table-striped table-hover table-bordered text-center">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>Référence</th>
                                        <th>Demandeur</th>
                                        <th>Telephone</th>
                                        <th>Type de demande</th>
                                        <th>Date</th>
                                        <th>Heure</th>
                                        <th>Nombre</th>
                                        <th>Montant</th>
                                        <th>Description</th>
                                        <th>Statut</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach (mesDemandes($_SESSION["user"]->id) as $demande) : ?>
                                    <tr>
                                        <td><?= htmlspecialchars($demande->reference) ?></td>
                                        <td><?= htmlspecialchars($demande->demandeur_prenom) ?> <?= htmlspecialchars($demande->demandeur_nom) ?></td>
                                        <td><?= htmlspecialchars($demande->demandeur_tel) ?></td>
                                        <td><?= htmlspecialchars($demande->nomMesse) ?></td>
                                        <td><?= date('d/m/Y', strtotime($demande->date)) ?></td>
                                        <td><?= htmlspecialchars($demande->heure) ?></td>
                                        <td><?= $demande->offrande_total / $demande->offrande ?></td>
                                        <td><?= htmlspecialchars($demande->offrande_total) ?> FCFA</td>
                                        <td><?= htmlspecialchars($demande->description) ?></td>
                                        
                                        <td>
                                            <?php if (!empty($demande->statut) && $demande->statut !== '0'): ?>
                                                <span class="badge 
                                                    <?= $demande->statut == 'payée' ? 'badge-primary' : 
                                                    ($demande->statut == 'valider' ? 'badge-success' : 
                                                    ($demande->statut == 'en attente' ? 'badge-warning' : 'badge-danger')) ?>"
                                                    id="statut-<?= $demande->id ?>">
                                                    <?= ucfirst(htmlspecialchars($demande->statut)) ?>
                                                </span>
                                            <?php endif; ?>

                                            <?php if ($demande->statut != 'valider' && $demande->statut != 'payée'): ?>
                                                <button class="btn btn-sm btn-success mt-2" 
                                                        onclick="validerDemande(<?= $demande->id ?>)">
                                                    payée
                                                </button>
                                            <?php endif; ?>
                                        </td>



                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>

                                <!-- <tbody>
                                    <?php foreach (mesDemandes($_SESSION["user"]->id) as $demande) : ?>
                                    <tr>
                                        <td><?= htmlspecialchars($demande->reference) ?></td>
                                        <td><?= htmlspecialchars($demande->nomMesse) ?></td>
                                        <td><?= date('d/m/Y', strtotime($demande->date)) ?></td>
                                        <td><?= htmlspecialchars($demande->heure) ?></td>
                                        <td><?= $demande->offrande_total / $demande->offrande ?></td>
                                        <td><?= number_format($demande->offrande_total, 0, ',', ' ') ?> FCFA</td>
                                        <td>
                                            <div class="text-truncate" style="max-width: 200px;">
                                                <?= htmlspecialchars($demande->description) ?>
                                            </div>
                                        </td>
                                        <td>
                                            <span class="badge 
                                                <?= $demande->statut == 'valider' ? 'badge-success' : ($demande->statut == 'en attente' ? 'badge-warning' : 'badge-danger') ?>">
                                                <?= ucfirst(htmlspecialchars($demande->statut)) ?>
                                            </span>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>

               
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