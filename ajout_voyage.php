<?php 
include_once(__DIR__ . '/include/header.php'); 
require_once 'controleurs/voyages.php';
require_once 'controleurs/pays.php';

if (isset($_POST['boutonAjouter'])) {     
    $controllerVoyages=new ControleurVoyage;
    $controllerVoyages->ajouter();
}
?>

    <main>
        
        <section>
            <form action="" method="post">
                <div>
                    <label for="nom">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Nom du voyage" minlength="2" maxlength="50" required>
                </div>
                <div>
                    <label for="prix">Prix</label>
                    <input type="number" id="prix" name="prix" placeholder="0.00" min="1" max="100000" step="0.01" required>
                </div>
                <div>
                    <label for="date_depart">Date de départ</label>
                    <input type="date" id="date_depart" name="date_depart" placeholder="Date de départ"required>
                </div>
                <div>
                    <label for="nombre_de_jours">Durée du voyage en jours</label>
                    <input type="number" id="nombre_de_jours" name="nombre_de_jours" placeholder="Durée du voyage" min="1" max="365" required>
                </div>
                <div>
                    <label for="fk_pays">Pays</label>
                    <?php
                        $controllerPays= new ControleurPays;
                        $controllerPays->afficherListeDeroulantePays();
                    ?>
                </div>
                <div>
                    <label for="description">Description</label>
                    <textarea type="text" id="description" name="description" placeholder="Description du voyage" minlength="2" maxlength="250" required></textarea>
                </div>

                <button name="boutonAjouter" type="submit">Ajouter le voyage</button>
            </form>
        </section>

        <section class="container">
            <a href="administration_module_personnel.php" aria-label="Retour à la liste des voyages">Retour à la liste des voyages</a>
        </section>

    </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>