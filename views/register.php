<?php
    require "includes/header.php";
    
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

?>

    <h2>Registro de Usuario</h2>
    <form action="./index.php?controller=userController&action=register" method="POST">
        <label for="username">Nombre de usuario:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="apellidop">Apellido paterno:</label>
        <input type="text" id="apellidop" name="apellidop" required>
        <br>
        <label for="apellidom">Apellido materno:</label>
        <input type="text" id="apellidom" name="apellidom" required>
        <br>
        <label for="email">Correo Electrónico:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="role">Rol:</label>
        <select id="role" name="role" required>
            <option value="1">Admin</option>
            <option value="2">Empleado</option>
        </select>
        <br>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

<?php
    require "includes/footer.php";
?>