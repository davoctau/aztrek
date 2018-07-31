<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$date_depart = $_POST["date_depart"];
$prix = $_POST["prix"];
$nbre_places = $_POST["nbre_places"];
$pays_id = $_POST["pays_id"];
$sejour_id = $_POST["sejour_id"];



// Enregistrement en base de données
updateDepart($id, $date_depart, $prix, $nbre_places);

// Redirection vers la liste
header("Location: index.php");

