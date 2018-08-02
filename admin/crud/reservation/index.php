<?php
require_once '../../../model/database.php';

$list_reservations = getAllReservation();

require_once '../../layout/header.php';
?>

<h1>Gestion des réservations</h1>

<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>Pays</th>
            <th>Séjours</th>
            <th>Départs</th>
            <th>Noms et Prénoms</th>
            <th>Nombre de personnes</th>
            <th>Valide</th>
            <th>Places totales</th>            
            <th>Places restantes</th>            
            <th>Actions</th>            
        </tr>
    </thead>
    <tbody>
        <?php foreach ($list_reservations as $reservation) : ?>
            <tr>
                <td><?php echo $reservation["pays"]; ?></td>
                <td><?php echo $reservation["sejour"]; ?></td>
                <td><?php echo $reservation["date_depart"]; ?></td>
                <td><?php echo $reservation["utilisateur"]; ?></td>
                <td><?php echo $reservation["nb_personne"]; ?></td>
                <td>
                    <?php if ($reservation["valide"]) : ?>
                        <a href="update_query.php?id=<?php echo $reservation["id"]; ?>" class="btn btn-danger">
                            <i class="fa fa-times-circle"></i>
                        </a>
                    <?php else: ?>
                        <a href="update_query.php?id=<?php echo $reservation["id"]; ?>" class="btn btn-success">
                            <i class="fa fa-check-circle"></i>
                        </a>
                    <?php endif; ?>
                </td>
                <td><?php echo $reservation["places_totales"]; ?></td>
                <td><?php echo $reservation["places_restantes"]; ?></td>
                <td class="col-actions">
                    <form action="delete_query.php" method="post" class="form-delete">
                        <input type="hidden" name="id" value="<?php echo $sejour["id"]; ?>">
                        <button type="submit" class="btn btn-danger" title="Supprimer">
                            <i class="fa fa-trash"></i>
                        </button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php require_once '../../layout/footer.php'; ?>