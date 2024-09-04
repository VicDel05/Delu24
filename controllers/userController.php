<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './models/userModel.php';

class userController{

    private $userModel;

    public function __construct(){
        // Instanciar el modelo del usuario
        $this->userModel = new userModel();
    }

    public function authenticate(){
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        //$user = new userModel();
        $authenticatedUser = $this->userModel->login($email, $password);

        if ($authenticatedUser) {
            $_SESSION['email'] = $authenticatedUser;
            header('Location: ./index.php?controller=PagesController&action=dashboard');
        } else {
            echo "Usuario o contraseña incorrectos.";
        }
    }

    public function register(){
        // Verificar si el formulario de registro ha sido enviado
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Obtener los datos del formulario
            $username = trim($_POST['username']);
            $apellidop = trim($_POST['apellidop']);
            $apellidom = trim($_POST['apellidom']);
            $email = trim($_POST['email']);
            $password = trim($_POST['password']);
            $role = trim($_POST['role']);

            // Validar los campos (agregar más validaciones según sea necesario)
            if (empty($username) || empty($apellidop) || empty($apellidom) || empty($email) || empty($password) || empty($role)) {
                echo 'Por favor, complete todos los campos';
                return;
            }

            // Intentar registrar al usuario
            $success = $this->userModel->register($username, $apellidop, $apellidom, $email, $password, $role);

            if ($success) {
                // Redirigir al usuario a la página de inicio de sesión o mostrar mensaje de éxito
                header('Location: ./index.php?controller=PagesController&action=login');
            } else {
                echo 'Error al registrar el usuario, intente de nuevo.';
            }
        }
    }
}
?>
