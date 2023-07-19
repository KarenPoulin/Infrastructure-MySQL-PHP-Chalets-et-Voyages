

<div class="cardVertical">
    <img src="https://picsum.photos/id/<?= $chalet->id_picsum ?>/400" alt="Photo du <?=$chalet->nom?>">
    <div class="cardInfosVertical">
        <h4><?= $chalet->nom ?></h4>
        <p><?= $chalet->description ?></p>
        <p>à partir de<span><?=$chalet->prix_basse_saison?>,00 $</span> en basse saison</p>
        <p>à partir de <span><?=$chalet->prix_haute_saison?>,00 $</span> en haute saison</p>
        <p>maximum de <span><?=$chalet->personnes_max?></span></p>
    </div>
</div>
