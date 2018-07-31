<?php
require_once '../../../model/database.php';

$list_departs = getAllEntities("depart");

require_once '../../layout/header.php';
?>

<h1>Gestion des départs</h1>

<a href="insert_form.php" class="btn btn-primary">Ajouter</a>

<hr>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Date de départ</th>
            <th>Prix</th>
            <th>Nombre de places</th>   
            <th>Actions</th> 
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_departs as $depart) : ?>
        <tr>
            <td><?php echo $depart["date_depart"]; ?></td>
            <td><?php echo $depart["prix"]; ?></td>
            <td><?php echo $depart["nbre_places"]; ?></td>                                   
            <td class="col-actions">
                <form action="delete_query.php" method="post" class="form-delete">
                    <input type="hidden" name="id" value="<?php echo $depart["id"]; ?>">
                    <button type="submit" class="btn btn-danger" title="Supprimer">
                        <i class="fa fa-trash"></i>
                    </button>
                </form>
                <a href="update_form.php?id=<?php echo $depart["id"]; ?>" class="btn btn-warning">
                    <i class="fa fa-edit"></i>
                </a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>