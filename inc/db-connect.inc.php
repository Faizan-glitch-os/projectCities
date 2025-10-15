<?php

try {
    $pdo = new PDO('mysql:host=localhost;dbname=cities;charset=utf8mb4', 'cities', 'wSI1n4]i!JQ93D97', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    // var_dump($e->getMessage());
    echo 'A problem occured with the database connection...';
    die();
}
