<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$utilisateur = current_user();

$nbre_personne = $_POST["nb_personne"];
$depart_id = $_POST["depart_id"];
$utilisateur_id = $utilisateur["id"];

insertParticipation($nb_personne, $depart_id, $utilisateur_id);

header("Location: pays.php?id=" . $depart_id);

