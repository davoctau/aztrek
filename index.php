<?php
require_once 'lib/functions.php';
require_once 'model/database.php';

$list_projects = getAllProjects(3);

get_header("Accueil");
?>

    <section class="slider">

      <article class="texte">
        <h1>Aztrek</h1>
        <h2>un nouveau monde à chaque pas</h2>
        <p>Organisateur de voyage au Mexique, AZTREK propose des circuits hors des sentiers battus pour découvrir les régions
          les plus authentiques de l’Amérique centrale. AZTREK s’inscrit dans une démarche d’écotourisme en planifiant des
          voyages responsables, dans des zones naturelles, en respectant l’environnement et en travaillant en collaboration
          avec les populations locales.</p>
      </article>

      <div class="owl-carousel">
        <div>
          <h2 class="slide-title">Trek au Mexique</h2>
          <img src="images/hiker.jpg" alt=""> </div>
        <div>
          <h2 class="slide-title">Trek au Honduras</h2>
          <img src="images/cascades.jpg" alt="" class="carousel-head"> </div>
        <div>
          <h2 class="slide-title">Trek au Costa Rica</h2>
          <img src="images/oaxaca-mexico.jpg" alt="" class="carousel-head"> </div>
        <div>
          <h2 class="slide-title">Trek au Guatemala</h2>
          <img src="images/guate2.jpg" alt="" class="carousel-head"> </div>
        <div>
          <h2 class="slide-title">Trek au Salvador</h2>
          <img src="images/volcan2.jpg" alt="" class="carousel-head"> </div>
      </div>

    </section>


    <section class="destination">
      <div class="container">

        <div id="dest"></div>

        <h2>Destinations Trek</h2>

        <div class="bulles">
          <a href="#">
            <img src="images/bg_mexique-1.jpg" alt="">
            <p>Mexique</p>
          </a>
          <a href="#">
            <img src="images/guate1.jpg" alt="">
            <p>Guatemala</p>
          </a>
          <a href="#">
            <img src="images/costarica1.jpg" alt="">
            <p>Costa Rica</p>
          </a>
          <a href="#">
            <img src="images/hondu.jpg" alt="">
            <p>Honduras</p>
          </a>
          <a href="#">
            <img src="images/elsalvador.jpg" alt="">
            <p>Salvador</p>
          </a>
        </div>

        <div class="cartes">
          <img src="images/mexique.jpg" alt="">
          <img src="images/guatemala.jpg" alt="">
          <img src="images/costarica.jpg" alt="">
          <img src="images/honduras.jpg" alt="">
          <img src="images/salvador.jpg" alt="">
        </div>
      </div>

    </section>

    <section class="experience">

      <div id="exp"></div>

      <h2>Partager Vos Expériences</h2>
      <article class="carnet">
        <div class="carnet-text">
          <h3>Carnet de Voyages</h3>
          <p>Nos voyageurs vous font découvrir leurs destinations coups de coeur, leurs rencontres inoubliables et sans oublier
            leurs découvertes culinaires…</p>
        </div>
        <a href="#">EVADEZ-VOUS</a>
      </article>
      <article class="liens">
        <p>Et suivez en temps réel les aventures de nos trekkeurs sur nos pages…</p>
        <a href="#">
          <img src="images/facebook.png" alt="">
        </a>
        <a href="#">
          <img src="images/twitter.png" alt="">
        </a>
        <a href="#">
          <img src="images/instagram.png" alt="">
        </a>
      </article>

    </section>

    <section class="equipe">

      <div id="team"></div>

      <h2>Des Spécialistes à votre écoute</h2>
      <img src="images/equipe.JPG" alt="">
      <article class="presentation">
        <h3>L'Equipe</h3>
        <p>Nos conseillers sont tous des passionnés de trekking et peuvent vous conseiller au mieux en fonction de votre niveau.
          Nos experts ont tous testé l’ensemble de nos circuits et se feront un plaisir d’étudier votre demande, et pourquoi
          pas vous réaliser un voyage sur mesure?</p>
        <a href="#">NOUS CONTACTER</a>
      </article>

    </section>

  <?php get_footer(); ?>