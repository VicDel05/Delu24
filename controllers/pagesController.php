<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class PagesController{
    // Método para mostrar la página de inicio de sesión
    public function login()
    {
        // Se carga la vista del login
        require_once 'views/login.php';
    }

    // Método para mostrar la página de registro
    public function register()
    {
        // Se carga la vista del registro
        require_once 'views/register.php';
    }

    // Método para mostrar el dashboard principal
    public function dashboard()
    {
        // Se puede verificar si el usuario está autenticado antes de cargar la vista
        // if (!isset($_SESSION['user'])) {
        //     header('Location: ./index.php?controller=PagesController&action=dashboard');
        //     exit();
        // }

        // Cargar la vista del dashboard
        require_once 'views/dashboard.php';
    }

    public function logout()
    {
        session_destroy();
        header('Location: ./index.php?controller=PagesController&action=login');
    }

    // Método para mostrar un error 404 si la página no existe
    public function error()
    {
        // Carga la vista del error 404
        require_once 'views/404.php';
    }
}
?>