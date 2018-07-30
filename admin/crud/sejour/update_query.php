<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_POST["id"];
$titre = $_POST["titre"];
$duree = $_POST["duree"];
$description = $_POST["description"];
$niveau = $_POST["niveau"];

// Upload de l'image
if ($_FILES["photo"]["error"] == UPLOAD_ERR_NO_FILE) {
    $sejour = getOneEntity("sejour", $id);
    $photo= $sejour["photo"];
} else {
    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"];
    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}

// Enregistrement en base de données
updateProjet($id, $titre, $photo, $duree, $niveau, $description);

// Redirection vers la liste
header("Location: index.php");

