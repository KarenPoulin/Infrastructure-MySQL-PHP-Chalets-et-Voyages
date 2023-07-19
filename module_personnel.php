<?php 
include_once(__DIR__ . '/include/header.php'); 
include_once "include/config.php";
require_once 'controleurs/voyages.php';
?>

  <main>
  
	<h1>Module personnel</h1>	
    <p>Liste des voyages organisés par pays. J'affiche la liste des voyages organisés par ordre alphabétique des pays.</p>
    

      <?php 
            $controllerVoyages = new ControleurVoyage;
            $controllerVoyages->afficherTousFiche();
        ?>

	
  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>
