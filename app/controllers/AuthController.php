<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User;

class AuthController extends Controller {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userModel = new User();
            $user = $userModel->getUserByUsername($_POST['username']);
            if ($user && password_verify($_POST['password'], $user['password'])) {
                $_SESSION['user'] = $user;
                header('Location: /dashboard');
                exit();
            } else {
                $this->view('auth/login', ['error' => 'Credenciales inválidas']);
            }
        } else {
            $this->view('auth/login');
        }
    }

    public function logout() {
        session_destroy();
        header('Location: /login');
        exit();
    }
}
