<select class=""  id="fk_pays" name="fk_pays" required>
    <?php 
        foreach ($pays as $unPays) {
    ?>
        <option value="<?= $unPays->id ?>">
            <?= $unPays->nom ?> (<?= $unPays->id ?>)
    <?php 
        }
    ?>
</select>