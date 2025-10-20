<?php

class WorldCityRepository
{

    public function __construct(private PDO $pdo) {}

    // turn array to model
    private function arrayToModel(array $entry): WorldCityModel
    {
        return new WorldCityModel(
            (int) $entry['id'],
            $entry['city'],
            $entry['city_ascii'],
            (float) $entry['lat'],
            (float) $entry['lng'],
            $entry['country'],
            $entry['iso2'],
            $entry['iso3'],
            $entry['admin_name'],
            $entry['capital'],
            (int) $entry['population']
        );
    }

    // to fetch all models with pagination
    public function pagination(int $page = 1, int $limit = 10): array
    {
        $page = max(1, $page);
        $limit = max(10, $limit);

        $offset = ($page - 1) * $limit;

        $stmt = $this->pdo->prepare("SELECT * FROM `worldcities` ORDER BY `population` DESC LIMIT :limit OFFSET :offset");
        $stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
        $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);

        $stmt->execute();
        $entries = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $models = [];

        // convert to array of WorldCityModel
        foreach ($entries as $entry) {
            $models[] = $this->arrayToModel($entry);
        }

        return $models;
    }

    // fetch models by id
    public function fetchById(int $id): ?WorldCityModel
    {
        $stmt = $this->pdo->prepare("SELECT * FROM `worldcities` WHERE `id` = :id");
        $stmt->bindValue(':id', $id);
        $stmt->execute();

        $entry = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!empty($entry)) {
            return $this->arrayToModel($entry);
        } else {
            return null;
        }
    }
}
