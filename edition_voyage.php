<?php 
include_once(__DIR__ . '/include/header.php'); 
require_once 'controleurs/voyages.php';
require_once 'controleurs/pays.php';

$controllerVoyages=new ControleurVoyage;

if (isset($_POST['boutonEditer'])) {     
    $controllerVoyages->editer();
}
?>

    <main>
        
    <?php
        $controllerVoyages->afficherFormulaireEdition();
    ?>

    <section class="container">
        <a href="administration_module_personnel.php" aria-label="Retour à la liste des voyages">Retour à la liste des voyages</a>
    </section>

    </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>