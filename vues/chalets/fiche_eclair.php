<?php 
require_once 'controleurs/chalets.php';
foreach($chalets as $chalet) { ?>


    <div class="cardHorizontal">
        <img src="https://picsum.photos/id/<?= $chalet->id_picsum ?>/400" alt="Photo du <?=$chalet->nom?>">
        <div class="cardInfos">
            <h4><?= $chalet->nom ?></h4>
            <p>à partir de <span><?=$chalet->prix_basse_saison?>,00 $</span></p>
            <a class="btn" role="button" href="fiche_chalet.php?id=<?= $chalet->id ?>">Pour en savoir plus</a>
        </div>
    </div>

<?php } ?>