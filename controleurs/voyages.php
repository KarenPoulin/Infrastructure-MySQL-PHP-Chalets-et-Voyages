<?php 
    require_once __DIR__ . '../../modeles/voyages.php';

class ControleurVoyage {

    function afficherTousFiche() {
        $voyages = modele_voyage::ObtenirTous();
        require './vues/voyages/liste_tableau.php';
    }

    function afficherTableauAvecBoutonsAction() {
        $voyages = modele_voyage::ObtenirTous();
        require './vues/voyages/tableau-avec-boutons-actions.php';
    }

    function ajouter() {
        if(isset($_POST['nom']) && 
            isset($_POST['description']) &&
            isset($_POST['prix']) &&
            isset($_POST['date_depart']) &&
            isset($_POST['nombre_de_jours']) &&
            isset($_POST['fk_pays'])) {
            $message = modele_voyage::ajouter($_POST['nom'], 
                                                $_POST['description'],
                                                $_POST['prix'],
                                                $_POST['date_depart'],
                                                $_POST['nombre_de_jours'],
                                                $_POST['fk_pays']);
            echo $message;
        } else {
            $erreur = "Impossible d'ajouter un voyage. Des informations sont manquantes";
            require __DIR__ . '/../vues/erreur.php';
        }
    }

    function editer() {
        if(isset($_GET['id'], $_POST['nom']) && isset($_POST['description']) && isset($_POST['prix']) && isset($_POST['date_depart']) && isset($_POST['nombre_de_jours']) && isset($_POST['fk_pays'])) {
            $message = modele_voyage::editer($_GET['id'], $_POST['nom'], $_POST['description'], $_POST['prix'], $_POST['date_depart'], $_POST['nombre_de_jours'], $_POST['fk_pays']);
            echo $message;
        } else {
            $erreur = "Impossible de modifier le voyage. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

    function afficherFormulaireEdition(){
        if(isset($_GET["id"])) {
            $voyage = modele_voyage::ObtenirUn($_GET["id"]);
            if($voyage) {  
                require './vues/voyages/formulaireEdition.php';
            } else {
                $erreur = "Aucun voyage trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du voyage à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    function afficherFormulaireSuppression(){
        if(isset($_GET["id"])) {
            $voyage = modele_voyage::ObtenirUn($_GET["id"]);
            if($voyage) {  
                require './vues/voyages/formulaireSuppression.php';
            }
        } else {
            $erreur = "L'identifiant (id) du voyage à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }

    function supprimer() {
        if(isset($_GET['id'])) {
            $message = modele_voyage::supprimer($_GET['id']);
            echo $message;
        } else {
            $erreur = "Impossible de supprimer le voyage. Des informations sont manquantes";
            require './vues/erreur.php';
        }
    }

}

?>