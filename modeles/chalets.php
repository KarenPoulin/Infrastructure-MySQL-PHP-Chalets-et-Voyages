<?php 

require_once __DIR__ . "../../include/config.php";

class modele_chalet {
    public $id;
    public $nom;
    public $description;
    public $personnes_max;
    public $prix_haute_saison;
    public $prix_basse_saison;
    public $actif;
    public $promo;
    public $date_inscription;
    public $fk_region;
    public $id_picsum;

    public function __construct($id, $nom, $description, $personnes_max, $prix_haute_saison, $prix_basse_saison, $actif, $promo, $date_inscription, $fk_region, $id_picsum) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->personnes_max = $personnes_max;
        $this->prix_haute_saison = $prix_haute_saison;
        $this->prix_basse_saison = $prix_basse_saison;
        $this->actif = $actif;
        $this->promo = $promo;
        $this->date_inscription = $date_inscription;
        $this->fk_region = $fk_region;
        $this->id_picsum = $id_picsum;
    }

    static function connecter() {
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error; // Pour fin de débogage
            exit();
        }

        return $mysqli;
    }

/*     public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();
        $resultatRequete = $mysqli->query("SELECT * FROM chalets ORDER BY nom");
        foreach($resultatRequete as $enregistrement) {
            $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region'], $enregistrement['id_picsum']);
        }
        return $liste;
    } */

//    ("SELECT * FROM chalets WHERE id=?")



    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM chalets WHERE id=?")) {
            $requete->bind_param("s", $id);
            $requete->execute();
            $result = $requete->get_result();
            if ($enregistrement = $result->fetch_assoc()) {
                $chalet = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region'], $enregistrement['id_picsum']);
            } else {
                return null;
            }
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            return null;
        }
        return $chalet;
    }






    public static function ObtenirSelonRegionEtActif($fk_region) {
        $liste = [];
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM chalets WHERE fk_region = ? AND actif = 1 ORDER BY nom")) {
            $requete->bind_param("s", $fk_region);
            $requete->execute();
            $result = $requete->get_result();
            while ($enregistrement = $result->fetch_assoc()) {
                $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region'], $enregistrement['id_picsum']);
            }
            $requete->close();
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            return null;
        }
        return $liste;
    }








    public static function ObtenirSixPromoActifRandom() {
        $liste = [];
        $mysqli = self::connecter();
        $resultatRequete = $mysqli->query("SELECT * FROM chalets WHERE promo = 1 AND actif = 1 ORDER BY RAND() LIMIT 6");
        foreach($resultatRequete as $enregistrement) {
            $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region'], $enregistrement['id_picsum']);
        }
        return $liste;
    }

    public static function ObtenirTousPromoActif() {
        $liste = [];
        $mysqli = self::connecter();
        $resultatRequete = $mysqli->query("SELECT * FROM chalets WHERE promo = 1 AND actif = 1 ORDER BY nom");
        foreach($resultatRequete as $enregistrement) {
            $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region'], $enregistrement['id_picsum']);
        }
        return $liste;
    }

    public static function ObtenirTousActif() {
        $liste = [];
        $mysqli = self::connecter();
        $resultatRequete = $mysqli->query("SELECT * FROM chalets WHERE actif = 1 ORDER BY nom");
        foreach($resultatRequete as $enregistrement) {
            $liste[] = new modele_chalet($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['personnes_max'], $enregistrement['prix_haute_saison'], $enregistrement['prix_basse_saison'], $enregistrement['actif'], $enregistrement['promo'], $enregistrement['date_inscription'], $enregistrement['fk_region'], $enregistrement['id_picsum']);
        }
        return $liste;
    }

}

?>