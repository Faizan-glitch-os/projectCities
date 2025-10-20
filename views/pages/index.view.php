<?php

/**
 * @var WorldCityModel $city
 */
?>
<ul>
    <?php foreach ($entries as $city): ?>
        <li><a href="city.php?<?= http_build_query(['id' => $city->id]) ?>"><?= $city->getCityCountry() ?></a></li>
    <?php endforeach ?>
</ul>