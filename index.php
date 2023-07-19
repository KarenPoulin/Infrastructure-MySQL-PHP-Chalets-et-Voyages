<?php 
  include_once(__DIR__ . '/include/header.php');
  include_once "include/config.php";
  require_once 'controleurs/chalets.php';

?>

<main>
    <h1>Projet final</h1>

    <!-- Chalets sous forme de cartes -->
    <!-- Affiche 6 chalets ACTIFS et en PROMOTION en ordre aléatoire. Indice : https://www.mysqltutorial.org/select-random-records-database-table.aspx  -->
    <div class="flex">

      <?php 
          $controllerChalets = new ControleurChalet;
          $controllerChalets->afficherSixPromoActifRandom();
      ?>


  </div>

</main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>
