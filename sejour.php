<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

if (!isset($_GET["id"])) {
    header("Location: 404.php");
}

$id = $_GET["id"];
$sejour = getOneEntity("sejour", $id);
$list_departs = getAlldeparts($id);




get_header("Accueil");
?>

<section class= "container">
    <h1><?php echo $sejour["titre"]; ?></h1>

    <?php foreach ($list_departs as $depart) : ?>
        <article>
            
            <div>
                <a href="utilisateur.php?id=<?php echo $sejour["id"]; ?>">
                    <h2><?php echo $sejour["titre"]; ?></h2>
                </a>
                <em><?php echo $sejour["duree"]; ?> jours</em>                
                <br>
                <em>Niveau Trek <?php echo $sejour["niveau"]; ?> /5</em>                
                <br>
                <em><?php echo $sejour["description"]; ?></em>
                <br>
                <em>Départ le <?php echo $depart["date_depart"]; ?></em>
                <br>
                <em><?php echo $depart["prix"]; ?> €</em>
                <br> 
                <input type="submit" value="Réserver">
               
                
            </div>
        </article>
    <?php endforeach; ?>

</section>

<?php get_footer(); ?>

