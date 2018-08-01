<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$depart = getOneEntity("depart", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier un départ</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Départ</label>
        <div class="col-sm-10">
            <input type="date" name="date_depart" value="<?php echo $depart["date_depart"]; ?>" class="form-control" placeholder="depart">
        </div>
    </div>
   
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Prix</label>
        <div class="col-sm-10">
            <input type="number" name="prix" value="<?php echo $depart["prix"]; ?>" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nombre de places</label>
        <div class="col-sm-10">
            <input type="number" name="nbre_places" value="<?php echo $depart["nbre_places"]; ?>" class="form-control">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>
