<?php

namespace App\Controllers;

use App\Core\Controller;

class AuthController extends Controller {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Lógica de autenticación
            $username = $_POST['username'];
            $password = $_POST['password'];
            // Aquí debería ir la lógica de autenticación
            // ...

            // Redirigir al reporte después de una autenticación exitosa
            header('Location: /report');
            exit();
        } else {
            $this->render('auth/login');
        }
    }

    public function logout() {
        // Lógica de logout
        session_destroy();
        header('Location: /login');
    }

    protected function render($view, $data = []) {
        extract($data);
        require "../app/views/{$view}.php";
    }
}
