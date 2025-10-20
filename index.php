<?php

require __DIR__ . '/inc/all.inc.php';

$WorldCityRepository = new WorldCityRepository($pdo);
var_dump($WorldCityRepository->fetch());



render('index.view', ['entries' => $entries]);
