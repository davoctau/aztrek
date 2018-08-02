<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$nb_personne = $_POST["nb_personne"];
$depart_id = $_POST["depart_id"];
$sejour_id = $_POST["sejour_id"];
$utilisateur_id = $utilisateur["id"];

insertReservation($nb_personne, $depart_id, $utilisateur_id);

header("Location: sejour.php?id=" . $sejour_id);

