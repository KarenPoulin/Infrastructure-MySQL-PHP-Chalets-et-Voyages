<?php
include_once(__DIR__ . '/include/header.php'); 
include_once "include/config.php";
require_once 'controleurs/chalets.php'

?>

<body>
    <main>
        <?php
            $controllerChalets=new ControleurChalet;
            $controllerChalets->afficherFicheComplete();
        ?>
    </main>
</body>

<?php include_once(__DIR__ . '/include/footer.php'); ?>