<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Core
{
    public function handleRequest()
    {
        // Obtén el controlador y la acción desde la URL
        $controllerName = isset($_GET['controller']) ? $_GET['controller'] : 'PagesController';
        $actionName = isset($_GET['action']) ? $_GET['action'] : 'login'; // Acción predeterminada

        // Convierte el nombre del controlador a la clase adecuada
        $controllerClass = ucfirst($controllerName); // 'pages' => 'Pages'

        // Construye la ruta del archivo del controlador
        $controllerPath = "controllers/$controllerClass.php";

        // Verifica si el archivo del controlador existe
        if (file_exists($controllerPath)) {
            require_once $controllerPath;

            if (class_exists($controllerClass)) {
                $controller = new $controllerClass();

                if (method_exists($controller, $actionName)) {
                    $controller->$actionName();
                } else {
                    echo "Método '$actionName' no encontrado en '$controllerClass'.";
                }
            } else {
                echo "Clase '$controllerClass' no encontrada.";
            }
        } else {
            echo "Archivo '$controllerPath' no encontrado.";
        }
    }
}
?>
