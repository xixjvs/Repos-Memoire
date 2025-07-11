<section class="p-4 " style="background-color: #f7ddb5;">
        <div class="container pt-5 mt-5" style="max-width: 600px;">
            <div class="list-group">
                <div class="list-group-item active text-center border-white" 
                    style="font-weight: bold; font-size: 1.5rem; background-color: #7d321be3; border: 2px solid white;">
                Formulaire d'<?= $_GET["type"] == 'edit' ? 'edition' : 'ajout' ?> Messe
                </div>
                <div class="text-end mt-2">
                    <a href="?page=listesMessesAdmin" class="btn btn-info"><i class="fa-solid fa-arrow-left"></i>Retour</a>
                </div>
            </div>
        </div>
        <?php require_once("includes/getMessage.php"); ?>

    <form action="" class="container" method="post" style="text-align: center;" enctype="multipart/form-data">
        <div class="row justify-content-center">
            
            <div class="form-group col-md-4 mb-3">
                <label for="nom">Nom <span class="text-danger">*</span></label>
                <input type="text" name="nom" value="<?= isset($c) ? $c-> nom : '' ?>" required class="form-control" style="width: 100%;">
            </div>
        </div>
        <div class="row justify-content-center">
            
            <div class="form-group col-md-4">
                <label for="offrande">Offrande <span class="text-danger">*</span></label>
                <input type="number" min="1" value="<?= isset($c) ? $c-> offrande : '' ?>" step="1" name="offrande" required class="form-control" style="width: 100%;">
            </div>
        </div>

        <?php if($_GET['type'] == "edit"): ?>
            <button class="btn btn-dark" style="background-color: #7d321be3;" type="submit" name="modifier">Modifier</button>
        <?php else: ?>
            <button class="btn btn-dark" style="background-color: #7d321be3;" type="submit" name="ajouter">Ajouter</button>
        <?php endif; ?>
    </form>


</section>