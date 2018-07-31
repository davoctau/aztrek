<?php

function insertPays(string $nom, string $photo, string $carte, string $image_slider, string $titre_slider): int {
    /* @var $connexion PDO */
    global $connexion;

    $query = "INSERT INTO pays (nom, photo, carte, image_slider, titre_slider) VALUES (:nom, :photo, :carte, :image_slider, :titre_slider)";

    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":carte", $carte);
    $stmt->bindParam(":image_slider", $image_slider);
    $stmt->bindParam(":titre_slider", $titre_slider);
    $stmt->execute();

    return $connexion->lastInsertId();
}

function updatePays(int $id, string $nom, string $photo, string $carte, string $image_slider, string $titre_slider) {
    /* @var $connexion PDO */
    global $connexion;
    
    $query = "UPDATE pays
                SET nom = :nom,
                    photo = :photo,
                    carte = :carte,
                    image_slider = :image_slider,
                    titre_slider = :titre_slider              
                WHERE id = :id
            ";
    
    
    $stmt = $connexion->prepare($query);
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nom", $nom);
    $stmt->bindParam(":photo", $photo);
    $stmt->bindParam(":carte", $carte);
    $stmt->bindParam(":image_slider", $image_slider);
    $stmt->bindParam(":titre_slider", $titre_slider);
    $stmt->execute();
}