<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Ajouter fleur</h1>


<div class="container">
    <form method="post">
        <?php if (!empty($errors)) erreursFormulaire($errors); ?>
        <input type="hidden" name="csrf" value="<?= creationToken() ?>">

        <div class="form-group row">
            <label for="image" class="col-sm-1-12 col-form-label">Image</label>
            <div class="col-sm-12">
                <input type="url" class="form-control" name="image" id="image" placeholder="Image" required autofocus value="<?= $_POST['image'] ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="nom" class="col-sm-1-12 col-form-label">Nom</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom" required value="<?= $_POST['nom'] ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="contenu" class="col-sm-1-12 col-form-label">Contenu</label>
            <div class="col-sm-12">
                <input type="text" class="form-control" name="contenu" id="contenu" placeholder="Contenu" required value="<?= $_POST['contenu'] ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="stock" class="col-sm-1-12 col-form-label">Stock</label>
            <div class="col-sm-12">
                <input type="number" class="form-control" mini='0' step='1' name="stock" id="stock" placeholder="Stock" required value="<?= $_POST['stock'] ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <label for="date_cueillette" class="col-sm-1-12 col-form-label">Date de cueillette</label>
            <div class="col-sm-12">
                <input type="date" class="form-control" name="date_cueillette" id="date_cueillette" placeholder="Date de cueillette" required value="<?= $_POST['date_cueillette'] ?? '' ?>">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-10">
                <button type="submit" class="btn btn-primary">Ajouter</button>
            </div>
        </div>
    </form>
</div>


<?php require_once __DIR__ . '/../parties/footer.php'; ?>