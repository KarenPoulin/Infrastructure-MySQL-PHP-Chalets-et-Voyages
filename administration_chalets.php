<?php include_once(__DIR__ . '/include/header.php'); ?>

  <main>
  
	<h1>Administration - Chalets</h1>


	<?php 
            if(!isset($_SESSION["utilisateur"])) { ?>
                  <p>Vous n'êtes pas connecter.</p>
    <?php } else { ?>

				<p>
				<b>En construction. On présume que cette partie serait réalisée dans une phase ultérieure.</b>
			</p> 

			<p>
				Il doit être impossible d'accéder à cette page sans être préalablement connecté.<br> 
				Le menu Administration doit être présent seulement si l'utilisateur est connecté. <br>
				Si un utilisateur non connecté essaie d'accéder à la page, un message d'erreur doit s'afficher.
			</p>

	<?php } ?>

  </main>

<?php include_once(__DIR__ . '/include/footer.php'); ?>