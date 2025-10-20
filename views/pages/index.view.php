<?php

/**
 * @var WorldCityModel $city
 */
?>
<ul>
    <?php foreach ($entries as $city): ?>
        <li>
            <a href="city.php?<?= http_build_query(['id' => $city->id]) ?>"><?= $city->getCityCountry() ?> <?= $city->flag() ?>
            </a>
        </li>
    <?php endforeach ?>
</ul>

<ul class="pagination">
    <?php if ($pagination['page'] > 1): ?>
        <li class="pagination__li">
            <a class="pagination__link" href="index.php?<?= http_build_query(['page' => $pagination['page'] - 1, 'limit' => $pagination['limit']]) ?>">⏴</a>
        </li>
    <?php endif ?>
    <li class="pagination__li">
        <a class="pagination__link <?= $pagination['page'] == e($x) ? 'pagination__link--active' : '' ?>" href="index.php?<?= http_build_query(['page' => $pagination['page'] + 1, 'limit' => $pagination['limit']]) ?>">Next</a>
    </li>
    <?php if ($pagination['page'] < $pagination['numberOfPages']): ?>
        <li class="pagination__li">
            <a class="pagination__link" href="index.php?<?= http_build_query(['page' => $page + 1, 'limit' => $pagination['limit']]) ?>">⏵</a>
        </li>
    <?php endif ?>

</ul>