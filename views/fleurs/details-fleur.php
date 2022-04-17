<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1><?= $fleur->nom ?></h1>

<div class="row">
    <div class="">
        <img src="<?= $fleur->image ?>" alt="" class="img-fluid thumbnail">
    </div>
    <div class="col-8">
        <dl>
            <dt>Nom</dt>
            <dd><?= $fleur->nom ?></dd>
            <dt>Contenu</dt>
            <dd><?= $fleur->contenu ?></dd>
            <dt>Stock :</dt>
            <dd><?= $fleur->stock ?></dd>
            <dt>Date_cueillette :</dt>
            <dd><?= $fleur->date_cueillette ?></dd>
        </dl>
    </div>

    <?php require_once __DIR__ . '/../parties/footer.php'; ?>