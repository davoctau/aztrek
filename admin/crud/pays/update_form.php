<?php
require_once '../../../model/database.php';

$id = $_GET["id"];
$pays = getOneEntity("pays", $id);

require_once '../../layout/header.php';
?>

<h1>Modifier un pays</h1>

<form action="update_query.php" method="post" enctype="multipart/form-data">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
            <input type="text" name="pays" value="<?php echo $pays["nom"]; ?>" class="form-control" placeholder="pays">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Photo</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $pays["photo"]; ?>"  class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-9">
            <input type="file" name="photo" value="<?php echo $pays["photo"]; ?>" class="form-control" placeholder="fichier_image">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Carte</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $pays["carte"]; ?>"  class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-9">
            <input type="file" name="carte" value="<?php echo $pays["carte"]; ?>" class="form-control" placeholder="fichier_image">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Image slider</label>
        <div class="col-sm-1">
            <img src="../../../uploads/<?php echo $pays["image_slider"]; ?>"  class="img-responsive img-thumbnail">
        </div>
        <div class="col-sm-9">
            <input type="file" name="slider" value="<?php echo $pays["image_slider"]; ?>" class="form-control" placeholder="fichier_image">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Titre slider</label>
        <div class="col-sm-10">
            <input type="text" name="titre" value="<?php echo $pays["titre_slider"]; ?>" class="form-control" placeholder="texte">
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <button type="submit" class="btn btn-success float-right">
        <i class="fa fa-save"></i>
        Enregistrer
    </button>
</form>

<?php require_once '../../layout/footer.php'; ?>

