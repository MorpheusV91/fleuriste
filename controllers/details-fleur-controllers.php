<?php


if (empty($_GET['id'])) error(404);

require_once __DIR__ . '/../models/fleurs-model.php';

 $fleur = oneFleur($_GET['id']);
 if (empty($fleur)) error(404);

require_once __DIR__ . '/../views/fleurs/details-fleur.php';