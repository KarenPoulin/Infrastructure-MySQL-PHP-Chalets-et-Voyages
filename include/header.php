<?php 
  session_start();
  require_once 'controleurs/regions.php';

  require_once 'controleurs/authentification.php';

  if (isset($_POST['boutonConnexion'])) {        
      $controllerAuthentification=new ControleurAuthentification;
      $controllerAuthentification->connecter();
  } else if (isset($_POST['boutonDeconnexion'])) { 
      $controllerAuthentification=new ControleurAuthentification;
      $controllerAuthentification->deconnecter();
  }
?>

<!DOCTYPE html>
<html lang="fr-CA">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Titre de la page (défi! rendre ce titre dynamique selon la page sélectionnée)</title>
  
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/styles_karen.css">
</head>

<body class="light-mode">

  <!-- Navigation -->
  <header>
    <nav>
      <img src="https://picsum.photos/id/13/80" alt="logo">
      <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="liste_chalets.php">Chalets à louer</a></li>
          <li>
            <a href="liste_chalets_par_region.php">Chalets par région &nbsp;<i class="arrow down"></i></a>

              <?php 
                  $controllerRegions = new ControleurRegion;
                  $controllerRegions->afficherListe();

              ?>

          </li>
          <li><a href="liste_chalets_en_promotion.php">Chalets en promotion</a></li>
          <li><a href="module_personnel.php">Module personnel</a></li>
          <?php 
            if(isset($_SESSION["utilisateur"])) { ?>
                  <li>
                      <a href="administration_chalets.php">Administration &nbsp;<i class="arrow down"></i></a>
                      <ul>
                          <li><a href="administration_chalets.php">Chalets</a></li>
                          <li><a href="administration_module_personnel.php">Module personnel</a></li>
                      </ul>
                  </li>
           <?php } ?>

      </ul>

      <!-- Formulaire de connexion -->
            <?php if(!isset($_SESSION["utilisateur"])) { ?>
              <dialog id="dialog_login"> 
                  <h2>Formulaire d'authentification</h2>
                  <form method="POST">
                      <label for="utilisateur_login">Utilisateur</label>
                      <input type="text" id="utilisateur_login" name="utilisateur_login" placeholder="Utilisateur" required><br>

                      <label for="mot_de_passe_login">Mot de passe</label>
                      <input type="password" id="mot_de_passe_login" name="mot_de_passe_login" placeholder="Mot de passe" required><br>

                      <button name="boutonConnexion" type="submit">Connexion</button>
                      <button id="close" class="annuler" aria-label="close" formnovalidate onclick="document.getElementById('dialog_login').close();">Annuler</button>
                      <br>
                      <a href="ajout_utilisateur.php">Nouvel utilisateur</a>
                  </form>
              </dialog>        
              <button onclick="document.getElementById('dialog_login').showModal();">Connexion</button>

          <?php } else { ?>
          
              <form method="POST">
                  Vous êtes connecté en tant que <?= $_SESSION["utilisateur"] ?> 
                  
                  <button name="boutonDeconnexion" type="submit">Déconnexion</button>
              </form>
          <?php } ?>
    </nav>
    <hr>
  </header>

  
