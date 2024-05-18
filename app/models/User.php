<?php

namespace App\Models;

use App\Core\Model;

class User extends Model {
    public function getUserByUsername($username) {
        $stmt = $this->pdo->prepare('SELECT * FROM users WHERE username = :username');
        $stmt->execute(['username' => $username]);
        return $stmt->fetch();
    }
}
