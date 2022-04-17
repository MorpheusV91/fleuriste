<?php require_once __DIR__ . '/../parties/header.php'; ?>

<h1>Les Fleurs</h1>

<div class="row">
  <?php foreach ($fleur as $fleurs) { ?>
    <div class="card col-4">
      <img class="card-img-top" src="<?= $fleurs->image ?>" alt="">
      <div class="card-body">
        <h4 class="card-title"><?= $fleurs->nom ?></h4>
        <p class="card-text"><?= resume($fleurs) ?></p>
        <p class="card-text">En stock : <?= $fleurs->stock ?></p>
        <p class="card-text">Cueillette : <?= formaterDate($fleurs) ?></p>
        <p class="card-body">
          <a class="btn btn-info" href="index.php?route=details-fleur&id=<?= $fleurs->id ?>">Details</a>
          <?php if (!empty($_SESSION['login']) && $_SESSION['login'] == 'admin') : ?>
            <a class="btn btn-warning text-light" href="index.php?route=update-fleur&id=<?= $fleurs->id ?>">Modifier</a>
            <a class="btn btn-danger" onclick="return confirm('Etes-vous sûr de vouloir SUPPRIMER ?')" href="index.php?route=delete-fleur&id=<?= $fleurs->id ?>&csrf=<?= creationToken() ?>">Supprimer</a>
          <?php endif; ?>
        </p>
      </div>
    </div>
  <?php } ?>
</div>

<?php require_once __DIR__ . '/../parties/footer.php'; ?>