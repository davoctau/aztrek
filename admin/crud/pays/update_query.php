<?php
require_once '../../security.php';
require_once '../../../model/database.php';

$id = $_POST["id"];
$pays = $_POST["pays"];

updateCategorie($id, $pays);

header("Location: index.php");