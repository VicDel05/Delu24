<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once './config/database.php';

class userModel{
    private $db;

    public function __construct(){
        $this->db = db_connect();
    }

    public function login($email, $password){
        try {
            $stmt = $this->db->prepare('SELECT * FROM Usuario WHERE Correo = ? AND Contrasena = ?;');
            $stmt->bind_param('ss', $email, $password);
            if ($stmt->execute()) {
                $result = $stmt->get_result();
                return $result->fetch_assoc();
                return true;
            } else {
                throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }        
    }

    public function register($username, $apellidop, $apellidom, $email, $password, $role){
        try {
            $stmt = $this->db->prepare('INSERT INTO Usuario (Nombre, ApellidoP, ApellidoM, Correo, Contrasena, Rol_idRol) VALUES (?, ?, ?, ?, ?, ?);');
            $stmt->bind_param('sssssi', $username, $apellidop, $apellidom, $email, $password, $role);
            if ($stmt->execute()) {
                return true;
            } else {
                throw new Exception("Error al ejecutar la consulta: " . $stmt->error);
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }
}
?>
