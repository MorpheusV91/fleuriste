<?php
if (!empty($_SESSION['login']) && $_SESSION['login'] != 'admin') error(403);

require_once __DIR__ . '/../models/fleurs-model.php';

function modifier()
{
    
    if (!empty($_POST)) {
        
        if (empty($_POST['csrf']) || !verificationToken($_POST['csrf'])) error(403);
        $errors = [];

        if (empty($_POST['image'])) $errors[] = 'L\'image est requis.';
        if (empty($_POST['nom'])) $errors[] = 'Le nom est requis.';
        if (empty($_POST['contenu'])) $errors[] = 'La contenu est requis.';
        if (empty($_POST['stock'])) $errors[] = 'La stock est requis.';
        if (empty($_POST['date_cueillette'])) $errors[] = 'La date est requise.';

        if (!validerUrl($_POST['image'])) $errors[] = 'L\'image doit etre une Url.';

        if (
            !is_numeric($_POST['stock'])
            || $_POST['stock'] < 0
            || intval($_POST['stock']) != $_POST['stock']
        ) $errors[] = 'Le stock doit être un nombre entier positif.';

        if (!validerDate($_POST['date_cueillette'])) $errors[] = 'La date doit être valide.';

        if (empty($errors)) {
            if (empty($_GET['id'])) error(404);
            modifierFleur($_GET['id'], $_POST['image'], $_POST['nom'], $_POST['contenu'], $_POST['stock'], $_POST['date_cueillette']);

            redirection('list-fleurs');
        }
    }
    $fleur = oneFleur($_GET['id']);
    if (empty($fleur)) error(404);

    require_once __DIR__ . '/../views/fleurs/update-fleur.php';
}
