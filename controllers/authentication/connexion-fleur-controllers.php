<?php

require_once __DIR__ . '/../../models/utilisateurs-model.php';

function oneUser()
{
    if (!empty($_POST)) {

        $errors = [];

        if (empty($_POST['login'])) $errors[] = 'L\'identifiant est requis.';
        if (empty($_POST['password'])) $errors[] = 'Le mot de passe est requis.';
        if (empty($errors)) {

            
            $utilisateur = oneUtilisateur($_POST['login'], $_POST['password']);

            if (empty($utilisateur)) $errors[] = 'Identifiant inconnu.';
            
            else {
                
                $_SESSION['login'] = $utilisateur->pseudo;
                $_SESSION['password'] = $utilisateur->mot_de_passe;
                
                creationToken();
                
                redirection('home');
            }
        }
    }

    require_once __DIR__ . '/../../views/fleurs/connexion.php';
}
