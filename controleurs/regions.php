<?php 

require_once __DIR__ . '../../modeles/regions.php';

class ControleurRegion {
    function afficherListe() {
        $regions = modele_region::ObtenirTous();
        require './vues/regions/liste.php';
    }


    function afficherRegion() {
        if(isset($_GET["id"])) {
            $region = modele_region::ObtenirUn($_GET["id"]);
            if($region) { 
                require './vues/regions/nom.php';
            } else {
                $erreur = "Aucune région trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) de la région à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }
}

?>