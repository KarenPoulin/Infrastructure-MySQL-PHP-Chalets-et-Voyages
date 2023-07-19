<?php include_once(__DIR__ . '/include/header.php'); 
      include_once "include/config.php";
      require_once 'controleurs/regions.php';  
      require_once 'controleurs/chalets.php';  
?>

  <main>


    <!-- Afficher la liste de tous les chalets actifs appartenant à la région sélectionnée, en ordre alphabétique -->
    <!-- L'affichage est à votre discrétion -->
    <?php
        $controllerRegions= new ControleurRegion;
        $controllerRegions->afficherRegion();
    ?>

    <?php 
      $controllerChalets = new ControleurChalet;
      $controllerChalets->afficherSelonRegionEtActif();
    ?>
  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>

