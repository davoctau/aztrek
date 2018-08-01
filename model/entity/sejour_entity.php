<?php

/**
 * Retourne la liste des sejours
 * @return array Liste des sejours
 */
function getAllSejours(int $limit = 999): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.nom as pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id          
            LIMIT :limit;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":limit", $limit);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getAllSejoursByPays(int $id): array {
    global $connexion;

    $query = "SELECT
                sejour.*,
                pays.nom as pays
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id          
            WHERE pays.id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getSejour(int $id): array {
    global $connexion;

    $query = "SELECT
                sejour.*            
            FROM sejour
            INNER JOIN pays ON pays.id = sejour.pays_id
            WHERE projet.id = :id;";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->execute();

    return $stmt->fetch();
}

function insertSejour(string $titre, string $photo, string $niveau, string $duree, string $description, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "INSERT INTO sejour (titre, photo, niveau, duree, description, pays_id) VALUES (:titre, :photo, :niveau, :duree, :description, :pays_id)";
    
    $stmt = $connexion->prepare($query);
    
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":niveau", $niveau);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}

function updateSejour(string $id,string $titre, string $photo, string $niveau, string $duree, string $description, int $pays_id): int {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE sejour
                SET titre = :titre,
                    photo = :photo,
                    niveau = :niveau,
                    duree = :duree,                
                    description = :description,
                    pays_id = :pays_id
                WHERE id = :id
            ";
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":titre", $titre);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":niveau", $niveau);
    $stmt->bindParam(":duree", $duree);
    $stmt->bindParam(":description", $description);
    $stmt->bindParam(":pays_id", $pays_id);
    $stmt->execute();
    
    return $connexion->lastInsertId();
}



