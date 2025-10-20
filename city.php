<?php

require_once __DIR__ . '/inc/all.inc.php';

$id = (int) $_GET['id'] ?? 1;

$WorldCityRepository = new WorldCityRepository($pdo);

$city = $WorldCityRepository->fetchById($id);

render('city', ['city' => $city]);
