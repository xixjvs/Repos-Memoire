<section class="p-4 " style="background-color: #f7ddb5;">
        <div class="container pt-5 mt-5" style="max-width: 600px;">
            <!-- Titre de la liste -->
            <div class="list-group">
                <div class="list-group-item active text-center border-white" 
                    style="font-weight: bold; font-size: 1.5rem; background-color: #7d321be3; border: 2px solid white;">
                    Liste des messes
                </div>
            </div>
    
            <!-- Articles -->
            <div class="mt-3">
                <!-- Article 1 -->
                
                <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Messe Simple</h5>
                            <p class="mb-0 text-muted">Offrande: <span class="price" data-unit-price="4000">4000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>

                 <!-- Article 2 -->
                 <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Messe Requiem</h5>
                            <p class="mb-0 text-muted">Offrande: <span class="price" data-unit-price="6000">6000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>

                 <!-- Article 3 -->
                 <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Enterrement sans messe</h5>
                            <p class="mb-0 text-muted">Offrande: <span class="price" data-unit-price="5000">5000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>

                 <!-- Article 4 -->
                 <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Enterrement avec messe</h5>
                            <p class="mb-0 text-muted">offrande: <span class="price" data-unit-price="6000">6000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>

                 <!-- Article 5 -->
                 <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Mariage avec messe</h5>
                            <p class="mb-0 text-muted">Offrande: <span class="price" data-unit-price="20000">20000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>

                 <!-- Article 6 -->
                 <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Mariage sans messe</h5>
                            <p class="mb-0 text-muted">Offrande: <span class="price" data-unit-price="10000">10000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>

                 <!-- Article 7 -->
                 <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Neuvaine</h5>
                            <p class="mb-0 text-muted">Offrande : <span class="price" data-unit-price="40000">40000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>
    
                <!-- Article 8 -->
                <div class="card mb-3 shadow-sm">
                    <div class="card-body d-flex justify-content-between align-items-center">
                        <div class="flex-grow-1">
                            <h5 class="mb-1">Trentaine</h5>
                            <p class="mb-0 text-muted">Offrande: <span class="price" data-unit-price="150000">150000</span>FCFA</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <a class="btn btn-custom btn-sm" href="?page=connexion">Demander une Grâce</a>
                        </div>
                    </div>
                </div>
            </div>

            
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
