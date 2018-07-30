<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$nom = $_POST["nom"];
$titre_slider = $_POST["titre_slider"];

// Upload de l'image
$photo = $_FILES["photo"]["name"];
$tmp = $_FILES["photo"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $photo);

// Upload de l'image
$carte = $_FILES["carte"]["name"];
$tmp = $_FILES["carte"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $carte);

// Upload de l'image
$image_slider = $_FILES["image_slider"]["name"];
$tmp = $_FILES["image_slider"]["tmp_name"];

move_uploaded_file($tmp, "../../../uploads/" . $image_slider);

insertPays($nom, $photo, $carte, $image_slider, $titre_slider);

header("Location: index.php");  