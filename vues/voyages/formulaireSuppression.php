<section>
    <div>
        <p>Confirmer la suppression de ce voyage:</p>
        <h4><?= $voyage->nom ?></h4>
        <h5><?= $voyage->nom_pays ?>(<?= $voyage->fk_pays ?>)</h5>
        <span>Prix: <?= $voyage->prix ?>$</span>
        <span>Date de départ: <?= $voyage->date_depart ?></span>
        <span>Durée: <?= $voyage->nombre_de_jours ?> jours</span>
        <p><?= $voyage->description ?></p>
    </div>

    <form action="" method="post">
        <button name="boutonSupprimer" type="submit">Supprimer le voyage</button><br>
    </form>
</section>