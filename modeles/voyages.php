<?php 

require_once __DIR__ . "../../include/config.php";

class modele_voyage {
    public $id;
    public $nom;
    public $description;
    public $prix;
    public $date_depart;
    public $nombre_de_jours;
    public $fk_pays;
    public $nom_pays;

    public function __construct($id, $nom, $description, $prix, $date_depart, $nombre_de_jours, $fk_pays, $nom_pays) {
        $this->id = $id;
        $this->nom = $nom;
        $this->description = $description;
        $this->prix = $prix;
        $this->date_depart= $date_depart;
        $this->nombre_de_jours = $nombre_de_jours;
        $this->fk_pays = $fk_pays;
        $this->nom_pays = $nom_pays;
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

        $resultatRequete = $mysqli->query("SELECT voyages.id, voyages.nom, description, prix, date_depart, nombre_de_jours, pays.id AS fk_pays, pays.nom AS nom_pays FROM voyages INNER JOIN pays ON pays.id = fk_pays ORDER BY nom_pays");

        foreach ($resultatRequete as $enregistrement) {
            $liste[] = new modele_voyage($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['prix'], $enregistrement['date_depart'], $enregistrement['nombre_de_jours'], $enregistrement['fk_pays'], $enregistrement['nom_pays']);
        }

        return $liste;
     }


     
     public static function ObtenirUn($id) {
        $mysqli = self::connecter();

        if ($requete = $mysqli->prepare("SELECT voyages.id, voyages.nom, description, prix, date_depart, nombre_de_jours, pays.id AS fk_pays, pays.nom AS nom_pays FROM voyages INNER JOIN pays ON pays.id = fk_pays WHERE voyages.id=?")) {
            $requete->bind_param("s", $id);
            $requete->execute(); 
            $result = $requete->get_result();

            if ($enregistrement = $result->fetch_assoc()) { 
                $voyage = new modele_voyage($enregistrement['id'], $enregistrement['nom'], $enregistrement['description'], $enregistrement['prix'], $enregistrement['date_depart'], $enregistrement['nombre_de_jours'], $enregistrement['fk_pays'], $enregistrement['nom_pays']);
            } else {
                return null;
            }

            $requete->close(); 
        } else {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            return null;
        }

        return $voyage;
     }



     public static function ajouter($nom, $description, $prix, $date_depart, $nombre_de_jours, $fk_pays) {
        $message = '';

        $mysqli = self::connecter();
        
        if ($requete = $mysqli->prepare("INSERT INTO voyages(nom, description, prix, date_depart, nombre_de_jours, fk_pays) VALUES(?, ?, ?, ?, ?, ?)")) {      

        $requete->bind_param("ssisii", $nom, $description, $prix, $date_depart, $nombre_de_jours, $fk_pays);

        if($requete->execute()) { 
            $message = "Voyage ajoutée";  
        } else {
            $message =  "Une erreur est survenue lors de l'ajout: " . $requete->error;
        }

        $requete->close();

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";  
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }



    public static function editer($id, $nom, $description, $prix, $date_depart, $nombre_de_jours, $fk_pays) {
        $message = '';

        $mysqli = self::connecter();
        
        // Création d'une requête préparée
        if ($requete = $mysqli->prepare("UPDATE voyages SET nom=?, description=?, prix=?, date_depart=?, nombre_de_jours=?, fk_pays=? WHERE id=?")) {      


        $requete->bind_param("ssisiii", $nom, $description, $prix, $date_depart, $nombre_de_jours, $fk_pays, $id);

        if($requete->execute()) { 
            $message = "Voyage modifié";  
        } else {
            $message =  "Une erreur est survenue lors de l'édition: " . $requete->error; 
        }

        $requete->close();

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }



    public static function supprimer($id) {
        $message = '';

        $mysqli = self::connecter();
        
        if ($requete = $mysqli->prepare("DELETE FROM voyages WHERE id=?")) {      

        $requete->bind_param("i", $id);

        if($requete->execute()) { 
            $message = "Voyage supprimé";  
        } else {
            $message =  "Une erreur est survenue lors de la suppression: " . $requete->error;  
        }

        $requete->close(); 

        } else  {
            echo "Une erreur a été détectée dans la requête utilisée : ";
            echo $mysqli->error;
            echo "<br>";
            exit();
        }

        return $message;
    }

}

?>