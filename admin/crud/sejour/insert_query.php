<?php
require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$titre = $_POST["titre"];
$duree = $_POST["duree"];
$niveau = $_POST["niveau"];
$description = $_POST["description"];


// Upload de l'image
$photo = $_FILES["photo"]["name"];
$tmp = $_FILES["photo"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $photo);

// Enregistrement en base de données
insertProjet($titre, $duree, $photo, $niveau, $description);

// Redirection vers la liste
header("Location: index.php");