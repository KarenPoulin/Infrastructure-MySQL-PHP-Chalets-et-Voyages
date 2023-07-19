<table>

    <?php 
        foreach($voyages as $voyage) {
    ?>
        <table>
            <tr>
                <td><?= $voyage->nom_pays ?>(<?= $voyage->fk_pays ?>)</td>
                <td><?= $voyage->nom ?></td>
                <td>Prix: <?= $voyage->prix ?> $</td>
                <td>Date de départ: <?= $voyage->date_depart ?></td>
                <td><?= $voyage->nombre_de_jours ?> jours</td>
            </tr>
            <tr>
                <td colspan="5"><?= $voyage->description ?></td>
            </tr>
            <tr>
                <td>
                    <a href="edition_voyage.php?id=<?= $voyage->id ?>">Modifier</a> 
                    | 
                    <a href="suppression_voyage.php?id=<?= $voyage->id ?>">Supprimer</a>
                </td>
            </tr>
        </table>

    <?php } ?>
</table>