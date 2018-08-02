<?php

function getAllReservationBySejour(int $id): array {
    global $connexion;

    $query = "SELECT
                utilisateur.nom,
                utilisateur.prenom,
                utilisateur.photo,
                participation.date_creation,
                participation.montant,
                participation.utilisateur_id
            FROM reservation
            INNER JOIN utilisateur
                    ON utilisateur.id = reservation.utilisateur_id
            WHERE reservation.depart_id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllReservationsByUtilisateur(int $id): array {
    global $connexion;

    $query = "SELECT
                depart.date_depart,
                depart.prix,
                depart.nombre_places,
                reservation.nb_personnes,
             
            FROM reservation
            INNER JOIN depart
                    ON depart.id = reservation.depart_id
            WHERE reservation.utilisateur_id = :id";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}
function insertReservation(float $nb_personne, int $depart_id, int $utilisateur_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO reservation (nb_personne, valide, depart_id, utilisateur_id) VALUES (:nb_personnes, NOW(), :depart_id, :utilisateur_id);";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nb_personne", $nb_personne);
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

