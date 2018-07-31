<?php

function insertDepart(string $date_depart, string $prix, string $nbre_places): int {
    /* @var $connexion PDO */
    global $connexion;

    $query = "INSERT INTO depart (date_depart, prix, nbre_places) VALUES (:date_depart, :prix, :nbre_places)";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nbre_places", $nbre_places);
    $stmt->execute();

    return $connexion->lastInsertId();
}

function updateDepart(int $id, string $date_depart, string $prix, string $nbre_places) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE depart
                SET date_depart = :date_depart,
                    prix = :prix,
                    nbre_places = :nbre_places,                              
                WHERE id = :id
            ";
    
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":date_depart", $date_depart);
    $stmt->bindParam(":prix", $prix);
    $stmt->bindParam(":nbre_places", $nbre_places);
    $stmt->execute();
}
