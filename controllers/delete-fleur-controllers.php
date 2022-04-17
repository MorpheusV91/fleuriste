<?php
if (!empty($_SESSION['login']) && $_SESSION['login'] != 'admin') error(403);

require_once __DIR__ . '/../models/fleurs-model.php';

function supprimerFleur()
{
        if (empty($_GET['csrf']) || !verificationToken($_GET['csrf'])) error(403);
        if (empty($_GET['id'])) error(404);

        deleteFleur($_GET['id']);

        redirection('list-fleurs');
}
