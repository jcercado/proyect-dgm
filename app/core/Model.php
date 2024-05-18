<?php

namespace App\Core;

use PDO;

class Model {
    protected $pdo;

    public function __construct() {
        // Obtener la ruta absoluta al archivo de configuración
        $configPath = dirname(__DIR__) . '../config/database.php';
        
        // Incluir el archivo de configuración
        $config = require_once $configPath;

        $host = $config['host'];
        $dbname = $config['dbname'];
        $username = $config['username'];
        $password = $config['password'];

        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $e) {
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
}
