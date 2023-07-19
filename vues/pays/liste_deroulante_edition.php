<select class=""  id="fk_pays" name="fk_pays" required>
    <?php 
         foreach ($pays as $unPays) {
            $selected = ($unPays->id == $paysSelectionne) ? 'selected' : '';
    ?>
        <option value="<?= $unPays->id ?>" <?= $selected ?>>
            <?= $unPays->nom ?> (<?= $unPays->id ?>)
        </option>
    <?php 
        }
    ?>
</select>