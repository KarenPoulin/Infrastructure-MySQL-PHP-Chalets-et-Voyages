<?php include_once(__DIR__ . '/include/header.php'); 
      include_once "include/config.php";
      require_once 'controleurs/chalets.php'  
?>

  <main>
  
    <section>
        <h1 class="my-4">Tous les chalets actifs</h1>
        <!-- Afficher la liste de tous les chalets actifs en ordre alphabétique -->
        <!-- L'affichage doit être le même que celui utilisé pour l'affichage des chalets par région -->

        <?php
              $controllerChalets=new ControleurChalet;
              $controllerChalets->afficherTousActif()
        ?>
    </section>
  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>

