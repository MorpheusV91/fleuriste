<?php

// - Retrieve (All)

function allFleurs(): array {

  $db = connexion();


  
  $resultat = $db->query('SELECT*FROM fleurs');


  return $resultat->fetchAll(PDO::FETCH_OBJ);
   

}
// - Retrieve (One)


function oneFleur(int $id): object {

  $db = connexion();


  // $resultat = $db->query('SELECT*FROM fleurs WHERE id = ' . $id);

  // return $resultat->fetch(PDO::FETCH_OBJ);

  // ------------------------------------------------------------------

    $requete = 'SELECT*FROM fleurs WHERE id = ?';
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$id);
    $stmt->execute();
  
    return $stmt->fetch(PDO::FETCH_OBJ);

}
// - Delete


function deleteFleur(int $id) {

  $db = connexion();


  // $resultat = $db->query('DELETE FROM fleurs WHERE id = ' . $id);


  // if ($resultat->rowCount() == 0) echo(error(404));


  // ----------------------------------------------------------------

    $requete = 'DELETE FROM fleurs WHERE id = ?';
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$id);
    $stmt->execute();
   
    if ($stmt->rowCount() == 0) echo(error(404));
}
// - Create

function createFleur(string $image, string $nom, string $contenu, string $stock, string $date_cueillette) {
  
  $nom = htmlspecialchars($nom);
  $contenu = htmlspecialchars($contenu);

  $db = connexion();


  // $db->query("INSERT INTO fleurs VALUES (NULL,'$image','$nom','$contenu','$stock','$date_cueillette')");

  // ---------------------------------------------------------------------------------------------------------
  
    $requete = "INSERT INTO fleurs VALUES (NULL,?,?,?,?,?)";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$image);
    $stmt->bindParam(2,$nom);
    $stmt->bindParam(3,$contenu);
    $stmt->bindParam(4,$stock);
    $stmt->bindParam(5,$date_cueillette);
    $stmt->execute();

}
// - Update


function modifierFleur(int $id, string $image, string $nom, string $contenu, string $stock, string $date_cueillette) {

  $nom = htmlspecialchars($nom);
  $contenu = htmlspecialchars($contenu);

  $db = connexion();


  // $db->query("UPDATE fleurs SET  image = '$image', nom = '$nom', contenu = '$contenu', stock = '$stock', date_cueillette = '$date_cueillette' WHERE id = $id");

  // -------------------------------------------------------------------------------------------------------------------------------------------------------------

    $requete = "UPDATE fleurs SET  image = ?, nom = ?, contenu = ?, stock = ?, date_cueillette = ? WHERE id = ?";
    $stmt = $db->prepare($requete);
    $stmt->bindParam(1,$image);
    $stmt->bindParam(2,$nom);
    $stmt->bindParam(3,$contenu);
    $stmt->bindParam(4,$stock);
    $stmt->bindParam(5,$date_cueillette);
    $stmt->bindParam(6,$id);
    $stmt->execute();

}