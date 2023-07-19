<?php 

require_once __DIR__ . '../../modeles/pays.php';

    class ControleurPays {

        function afficherListeDeroulantePays() {
            $pays = modele_pays::ObtenirTous();
            require  __DIR__ . '/../vues/pays/liste_deroulante.php';
        }

        function afficherListeDeroulantePaysEdition($paysSelectionne) {
            $pays = modele_pays::ObtenirTous();
            require  __DIR__ . '/../vues/pays/liste_deroulante_edition.php';
        }

    }

?>