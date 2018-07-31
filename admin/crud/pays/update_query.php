<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$nom = $_POST["nom"];
$titre_slider = $_POST["titre_slider"];

// Upload de l'image
if ($_FILES["photo"]["error"] == UPLOAD_ERR_NO_FILE) {
    $pays = getOneEntity("pays", $id);
    $photo= $pays["photo"];
} else {
    $photo = $_FILES["photo"]["name"];
    $tmp = $_FILES["photo"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $photo);
}

// Upload de l'image
if ($_FILES["carte"]["error"] == UPLOAD_ERR_NO_FILE) {
    $pays = getOneEntity("pays", $id);
    $carte= $pays["carte"];
} else {
    $carte = $_FILES["carte"]["name"];
    $tmp = $_FILES["carte"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $carte);
}

// Upload de l'image
if ($_FILES["image_slider"]["error"] == UPLOAD_ERR_NO_FILE) {
    $pays = getOneEntity("pays", $id);
    $image_slider= $pays["image_slider"];
} else {
    $image_slider = $_FILES["image_slider"]["name"];
    $tmp = $_FILES["image_slider"]["tmp_name"];
    move_uploaded_file($tmp, "../../../uploads/" . $image_slider);
}


updatePays($id, $nom, $photo, $carte, $image_slider, $titre_slider);

header("Location: index.php");