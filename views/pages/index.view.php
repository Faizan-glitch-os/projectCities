<ul>
    <?php foreach ($entries as $city): ?>
        <li><?= $city->capital ?> (<?= $city->country ?>)</li>
    <?php endforeach ?>
</ul>