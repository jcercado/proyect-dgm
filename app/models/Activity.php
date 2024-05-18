<?php

namespace App\Models;

use App\Core\Model;

class Activity extends Model {
    public function getAllActivities() {
        $stmt = $this->pdo->query('SELECT * FROM activities');
        return $stmt->fetchAll();
    }

    public function addActivity($data) {
        $stmt = $this->pdo->prepare('INSERT INTO activities (title, description, status) VALUES (:title, :description, :status)');
        $stmt->execute($data);
    }

    public function updateActivity($id, $data) {
        $stmt = $this->pdo->prepare('UPDATE activities SET title = :title, description = :description, status = :status WHERE id = :id');
        $stmt->execute(array_merge($data, ['id' => $id]));
    }
}
