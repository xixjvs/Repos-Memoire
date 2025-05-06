<section  style="background-color: #f7ddb5;">
    <div class="container mt-5 pt-4" style="margin-top: 50%;"> <!-- Augmentez margin-top pour descendre la page -->
        <h3 class="text-center mb-3 pt-5">Demandes globales</h3> <!-- Alignement centré avec un espacement plus important -->
        <div class="table-responsive shadow-lg p-3 mb-5 bg-white rounded">
            <!-- Ajout de la classe table-responsive pour la compatibilité mobile -->
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Référence</th>
                        <th>Demandeur</th>
                        <th>Telephone</th>
                        <th>Type de demande</th>
                        <th>Date de demande</th>
                        <th>Heure de demande</th>
                        <th>Montant</th>
                        <th>Statut</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($toutes_les_demandes as $demande): ?>
                        <tr>
                            <td><?= $demande->reference ?></td>
                            <td><?= htmlspecialchars($demande->prenomUser) ?> <?= htmlspecialchars($demande->nomUser) ?></td>
                            <td><?= $demande->telUser ?></td>
                            <td><?= ucfirst(htmlspecialchars($demande->nomMesse)) ?></td>
                            <td><?= date('d/m/Y', strtotime($demande->date)) ?></td>
                            <td><?= $demande->heure ?></td>
                            <td><?= $demande->offrande_total ?> FCFA</td>
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
                                        Payée
                                    </button>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>





