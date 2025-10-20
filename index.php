<?php

require __DIR__ . '/inc/all.inc.php';

$WorldCityRepository = new WorldCityRepository($pdo);

$page = empty($_GET['page']) ? 1 : $_GET['page'];
$limit = empty($_GET['limit']) ? 10 : $_GET['limit'];

$entries = $WorldCityRepository->pagination($page, $limit);
render('index', ['entries' => $entries]);
