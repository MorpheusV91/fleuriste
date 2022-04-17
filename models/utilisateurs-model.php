<?php

function oneUtilisateur(string $pseudo) {

  $db = connexion();

    // $requete = 'SELECT * FROM utilisateurs WHERE (?,?,?,?)' ;
    $requete = 'SELECT * FROM utilisateurs WHERE pseudo = ?';
    $stmt = $db->prepare($requete);
    // $stmt->bindParam(1,$id);
    $stmt->bindParam(1,$pseudo);
    // $stmt->bindParam(4,$email);
    $stmt->execute();
  
    return $stmt->fetch(PDO::FETCH_OBJ);
}