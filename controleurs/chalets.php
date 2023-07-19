<?php 

require_once __DIR__ . '../../modeles/chalets.php';

class ControleurChalet {
/*     function afficherFichePromo() {
        $chalets = modele_chalet::ObtenirTous();
        require './vues/chalets/fiche_promo.php';
    } */

    function afficherSixPromoActifRandom() {
        $chalets = modele_chalet::ObtenirSixPromoActifRandom();
        require './vues/chalets/fiche_promo.php';
    }

    function afficherTousPromoActif() {
        $chalets = modele_chalet::ObtenirTousPromoActif();
        require './vues/chalets/fiche_eclair.php';
    }
    
    function afficherTousActif() {
        $chalets = modele_chalet::ObtenirTousActif();
        require './vues/chalets/fiche_eclair.php';
    }

    function afficherFicheComplete() {
        if(isset($_GET["id"])) {
            $chalet = modele_chalet::ObtenirUn($_GET["id"]);
            if($chalet) { 
                require './vues/chalets/fiche_complete.php';
            } else {
                $erreur = "Aucun chalet trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }






    function afficherSelonRegionEtActif() {
        if(isset($_GET["id"])) {
            $fk_region = $_GET["id"];
            $chalets = modele_chalet::ObtenirSelonRegionEtActif($fk_region);
            if($chalets) { 
                require './vues/chalets/fiche_eclair.php';
            } else {
                $erreur = "Aucun chalet trouvé";
                require './vues/erreur.php';
            }
        } else {
            $erreur = "L'identifiant (id) du chalet à afficher est manquant dans l'url";
            require './vues/erreur.php';
        }
    }




}

?>