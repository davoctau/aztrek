<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);
$list_departs = getAllDepartsBySejour($id);




get_header("Accueil");
?>

<section class= "container">
    <h1><?php echo $sejour["titre"]; ?></h1>
    <em><?php echo $sejour["duree"]; ?> jours</em>                
    <br>
    <em>Niveau Trek <?php echo $sejour["niveau"]; ?> /5</em>                
    <br>
    <em><?php echo $sejour["description"]; ?></em>

    <?php foreach ($list_departs as $depart) : ?>
        <article>          
            <div>    
                <br>
                <em>Départ le <?php echo $depart["date_depart"]; ?></em>
                <br>
                <em><?php echo $depart["places_restantes"]; ?> / <?php echo $depart["nbre_places"]; ?> places</em>
                <br>
                <em><?php echo $depart["prix"]; ?> €/pers</em>
                <br>
                <form action="insert_reservation.php" method="post">
                    <input type="hidden" name="depart_id" value="<?php echo $depart["id"]; ?>">
                    <input type="hidden" name="sejour_id" value="<?php echo $sejour["id"]; ?>">
                    <input type="number" name="nb_personne" placeholder="Nombre de personnes">
                    <input type="submit" value="Réserver">
                </form>
            </div>
        </article>
    <?php endforeach; ?>

</section>

<?php get_footer(); ?>

