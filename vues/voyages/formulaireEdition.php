<?php
require_once 'controleurs/pays.php';
?>

<section>
    <form action="" method="post">
        <div>
            <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" placeholder="Nom du voyage" minlength="2" maxlength="50" value="<?= $voyage->nom ?>" required>
        </div>
        <div>
            <label for="prix">Prix</label>
            <input type="number" id="prix" name="prix" placeholder="0.00" min="1" max="100000" step="0.01" value="<?= $voyage->prix ?>" required>
        </div>
        <div>
            <label for="date_depart">Date de départ</label>
            <input type="date" id="date_depart" name="date_depart" placeholder="Date de départ" value="<?= $voyage->date_depart ?>" required>
        </div>
        <div>
            <label for="nombre_de_jours">Durée du voyage en jours</label>
            <input type="number" id="nombre_de_jours" name="nombre_de_jours" placeholder="Durée du voyage" min="1" max="365" value="<?= $voyage->nombre_de_jours ?>" required>
        </div>
        <div>
            <label for="fk_pays">Pays</label>
            <?php
                /* $controllerPays= new ControleurPays; */
                /* $controllerPays->afficherListeDeroulantePays(); */

                $controllerPays = new ControleurPays;
                $controllerPays->afficherListeDeroulantePaysEdition($voyage->fk_pays);
            ?>
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" id="description" name="description" placeholder="Description du voyage" minlength="2" maxlength="250" value="<?= $voyage->description ?>" required>
        </div>

        <button name="boutonEditer" type="submit">Modifier le voyage</button>
    </form>
</section>