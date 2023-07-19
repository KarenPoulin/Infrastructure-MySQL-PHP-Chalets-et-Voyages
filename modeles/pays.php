<?php 

require_once __DIR__ . "../../include/config.php";

class modele_pays {
    public $id;
    public $nom;

    public function __construct($id, $nom) {
        $this->id = $id;
        $this->nom = $nom;
    }

    static function connecter() {
        $mysqli = new mysqli(Db::$host, Db::$username, Db::$password, Db::$database);

        if ($mysqli -> connect_errno) {
            echo "Échec de connexion à la base de données MySQL: " . $mysqli -> connect_error;
            exit();
        }

        return $mysqli;
     }

     public static function ObtenirTous() {
        $liste = [];
        $mysqli = self::connecter();

        $resultatRequete = $mysqli->query("SELECT id, nom FROM pays ORDER BY nom");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_pays($enregistrement['id'], $enregistrement['nom']);
        }

        return $liste;
     }


}

?>