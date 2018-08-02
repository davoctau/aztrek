<?php

function getAllReservation(): array {
    global $connexion;

    $query = "SELECT
                reservation.*,
                pays.nom as pays,
                sejour.titre as sejour,
                concat (utilisateur.nom, ' ', utilisateur.prenom) as utilisateur,
                depart.date_depart as date_depart,
                depart.nbre_places as places_totales,
                depart.nbre_places - IFNULL(SUM(IF(reservation.valide, reservation.nb_personne, 0)), 0) AS places_restantes                                         
            FROM reservation
            INNER JOIN utilisateur ON utilisateur.id = reservation.utilisateur_id
            INNER JOIN depart ON depart.id = reservation.depart_id
            INNER JOIN sejour ON sejour.id = depart.sejour_id
            INNER JOIN pays ON pays.id = sejour.pays_id
            GROUP BY reservation.id";
                    
    $stmt = $connexion->prepare($query);
    $stmt->execute();

    return $stmt->fetchAll();
}


function updateReservation(int $id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE reservation SET valide = NOT valide WHERE id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function insertReservation(string $nb_personne,int $depart_id, int $sejour_id, int $utilisateur_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (nb_personne, valide, depart_id, sejour_id, utilisateur_id) VALUES (:nb_personne, 0, :depart_id, :sejour_id, :utilisateur_id)";
    
    $stmt = $connexion->prepare($query);
    
    $stmt->bindParam(":nb_personne", $nb_personne);0
    $stmt->bindParam(":depart_id", $depart_id);
    $stmt->bindParam(":sejour_id", $sejour_id);
    $stmt->bindParam(":utilisateur_id", $utilisateur_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}
