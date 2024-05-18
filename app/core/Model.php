<?php

namespace App\Core;

use PDO;

class Model {
    protected $pdo;

    public function __construct() {
        $config = require '../app/config/database.php';
        $this->pdo = new PDO("mysql:host={$config['host']};dbname={$config['dbname']};charset={$config['charset']}", $config['username'], $config['password']);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
