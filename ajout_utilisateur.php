<?php 
include_once(__DIR__ . '/include/header.php'); 
require_once 'controleurs/authentification.php';

if (isset($_POST['boutonAjoutUtilisateur'])) {        
    $controllerAuthentification=new ControleurAuthentification;
    $controllerAuthentification->ajouter();
}

?>


<section class="cardVertical">
    <h2>Ajout d'un utilisateur</h2>
    <form method="POST">
        <label for="utilisateur_ajout">Utilisateur</label>
        <input type="text" id="utilisateur_ajout" name="utilisateur_ajout" maxlength="100" required>

        <label for="mot_de_passe_ajout">Mot de passe</label>
        <input type="password" id="mot_de_passe_ajout" name="mot_de_passe_ajout" maxlength="255" required>

        
        <label for="utilisateur_ajout">Courriel</label>
        <input type="email" id="courriel_ajout" name="courriel_ajout" maxlength="255" required>

        <div>
            <button name="boutonAjoutUtilisateur" id="submit_btn_utilisateur" name="submit_btn_utilisateur" type="submit">Ajouter l'utilisateur</button>
        </div>
    </form>
    <a href="index.php">Annuler</a>
</section>


<?php include_once(__DIR__ . '/include/footer.php'); ?>