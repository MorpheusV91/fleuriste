<?php 

require_once __DIR__ . '/../models/fleurs-model.php';

        $fleur = allFleurs();
        if (empty($fleur)) error(404);

require_once __DIR__ . '/../views/fleurs/list-fleurs.php';