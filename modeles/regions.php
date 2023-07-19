<?php 

require_once __DIR__ . "../../include/config.php";

class modele_region {
    public $id;
    public $nom;

    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
    }

    static function connecter() {
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error; // Pour fin de débogage
            exit();
        }

        return $mysqli;
    }

    public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();
        $resultatRequete = $mysqli->query("SELECT * FROM regions ORDER BY nom");
        foreach($resultatRequete as $enregistrement) {
            $liste[] = new modele_region($enregistrement['id'], $enregistrement['nom']);
        }
        return $liste;
    }


/* SELECT regions.id, regions.nom, chalets.id AS id_chalet, chalets.nom AS nom_chalet, chalets.description AS description_chalet, chalets.personnes_max AS personnes_max_chalet, chalets.prix_haute_saison AS prix_haute_saison_chalet, chalets.prix_basse_saison AS prix_basse_saison_chalet, chalets.actif AS actif_chalet, chalets.promo AS promo_chalet, chalets.date_inscription AS date_inscription_chalet, chalets.fk_region AS fk_region_chalet, chalets.id_picsum as id_picsum_chalet FROM regions INNER JOIN chalets ON regions.id = chalets.fk_region */
    public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT * FROM regions WHERE id=?")) {
            $requete->bind_param("s", $id);
            $requete->execute();
            $result = $requete->get_result();
            if ($enregistrement = $result->fetch_assoc()) {
                $chalet = new modele_region($enregistrement['id'], $enregistrement['nom']);
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

}

?>