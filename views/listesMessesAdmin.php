<section class="p-4 " style="background-color: #f7ddb5;">
        <div class="container pt-5 mt-5" style="max-width: 600px;">
            <div class="list-group">
                <div class="list-group-item active text-center border-white" 
                    style="font-weight: bold; font-size: 1.5rem; background-color: #7d321be3; border: 2px solid white;">
                    Liste des messes
                </div>
                <div class="text-end mt-2">
                    <a href="?page=listesMessesAdmin&type=add" class="btn btn-success"><i class="fa-solid fa-plus"></i>Ajouter</a>
                </div>
            </div>
            
            <?php require_once("includes/getMessage.php"); ?>
            
            <?php foreach($messes as $c ): ?>
            <!-- Articles -->
            <div class="mt-3">
                <!-- Article 1 -->
                
                <div class="card mb-3 shadow-sm">
                    <form action="" method="post">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <a href="?page=demandesAdmin&id=<?= $c->id ?>" style="color: #000000; text-decoration:none"><h5 class="mb-1"><?= $c->nom ?></h5></a>
                                <p class="mb-0 text-muted">offrande : <span class="price" data-unit-price="<?= $c ->offrande?>"><?= $c ->offrande?></span>FCFA</p>
                                <input type="hidden" name="idmesse" value="<?= $c->id ?>">
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="number" name="nombre" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1" >
                                <button type="submit" class="btn btn-custom btn-sm" name="continuer">Continuer</a>
                            </div>
                        </div>
                    </form>

                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="?page=listesMessesAdmin&type=edit&id=<?= $c -> id ?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModal<?= $c->id ?>"><i class="fa fa-trash"></i></a>
                        </span>
                        <div class="modal fade" id="exampleModal<?= $c->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Suppression Messe</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Etes-vous sûr de vouloir supprimer cette messe?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Non</button>
                                    <a href="?page=listesMessesAdmin&idDeleting=<?= $c -> id ?>" class="btn btn-success">Oui</a>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                 <!-- Article 2 -->
                 <!-- <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Messe Requiem</h5>
                            <p class="mb-0 text-muted">Prix : <span class="price" data-unit-price="6000">6000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1">
                            <a class="btn btn-custom btn-sm" href="?page=demandesAdmin">Continuer</a>
                        </div>
                    </div>
                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </span>
                    </div>
                </div> -->

                 <!-- Article 3 -->
                 <!-- <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Enterrement sans messe</h5>
                            <p class="mb-0 text-muted">Prix : <span class="price" data-unit-price="5000">5000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1">
                            <a class="btn btn-custom btn-sm" href="?page=demandesAdmin">Continuer</a>
                        </div>
                    </div>
                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </span>
                    </div>
                </div> -->

                 <!-- Article 4 -->
                 <!-- <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Enterrement avec messe</h5>
                            <p class="mb-0 text-muted">Prix : <span class="price" data-unit-price="6000">6000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1">
                            <a class="btn btn-custom btn-sm" href="?page=demandesAdmin">Continuer</a>
                        </div>
                    </div>
                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </span>
                    </div>
                </div> -->

                 <!-- Article 5 -->
                 <!-- <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Messe avec messe</h5>
                            <p class="mb-0 text-muted">Prix : <span class="price" data-unit-price="20000">20000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1">
                            <a class="btn btn-custom btn-sm" href="?page=demandesAdmin">Continuer</a>
                        </div>
                    </div>
                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </span>
                    </div>
                </div> -->

                 <!-- Article 6 -->
                 <!-- <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Mariage sans messe</h5>
                            <p class="mb-0 text-muted">Prix : <span class="price" data-unit-price="10000">10000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1">
                            <a class="btn btn-custom btn-sm" href="?page=demandesAdmin">Continuer</a>
                        </div>
                    </div>
                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </span>
                    </div>
                </div> -->

                 <!-- Article 7 -->
                 <!-- <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Neuvaine</h5>
                            <p class="mb-0 text-muted">Prix : <span class="price" data-unit-price="40000">40000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1">
                            <a class="btn btn-custom btn-sm" href="?page=demandesAdmin">Continuer</a>
                        </div>
                    </div>
                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </span>
                    </div>
                </div> -->
    
                <!-- Article 8 -->
                <!-- <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Trentaines</h5>
                            <p class="mb-0 text-muted">Prix : <span class="price" data-unit-price="150000">150000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <input type="number" class="form-control form-control-sm quantity mx-2" style="width: 80px;" min="1" value="1">
                            <a class="btn btn-custom btn-sm" href="?page=demandesAdmin">Continuer</a>
                        </div>
                    </div>
                    <div style="position: relative; top: -10px; text-align: right; right: 20px;">
                        <span>
                            <a href="" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </span>
                    </div>
                </div> -->
            </div>
            <?php endforeach; ?>
            
        </div>
        
        
        <!-- JavaScript -->
        <script>
            // Sélectionne tous les champs de quantité
            const quantities = document.querySelectorAll('.quantity');
    
            // Parcourt chaque champ de quantité et ajoute un écouteur d'événements
            quantities.forEach(quantity => {
                quantity.addEventListener('input', function () {
                    // Trouve l'élément parent contenant le prix
                    const parentCard = quantity.closest('.card-body');
                    const priceElement = parentCard.querySelector('.price');
    
                    // Récupère le prix unitaire et la quantité saisie
                    const unitPrice = parseFloat(priceElement.getAttribute('data-unit-price'));
                    const quantityValue = parseInt(this.value) || 1;
    
                    // Calcule le prix total
                    const totalPrice = unitPrice * quantityValue;
    
                    // Met à jour le texte du prix
                    priceElement.textContent = totalPrice.toFixed(2);
                });
            });
        </script>
</section>