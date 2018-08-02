<?php

require_once '../../security.php';
require_once '../../../model/database.php';

// Récupération des données du formulaire
$id = $_GET["id"];

// Enregistrement en base de données
updateReservation($id);

// Redirection vers la liste
header("Location: index.php");

