<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

    require "includes/header.php";
    require "includes/navbar.php";
?>

<div class="container mt-3">
    <h2>Registro de Usuario</h2>
    <div class="row">
        <div class="col-md-6 mt-3">
            <form action="./index.php?controller=userController&action=register" method="POST">
                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label for="username" class="form-label">Nombre de usuario</label>
                        <input type="text" id="username" name="username" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="apellidop" class="form-label">Apellido paterno</label>
                        <input type="text" id="apellidop" name="apellidop" class="form-control" required>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="apellidom" class="form-label">Apellido materno</label>
                        <input type="text" id="apellidom" name="apellidom" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Correo Electrónico:</label>
                        <input type="text" id="email" name="email" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="role" class="form-label">Rol:</label>
                        <select id="role" name="role" class="form-select" required>
                            <option value="1">Administrador</option>
                            <option value="2">Empleado</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
        </div>
        <div class="col-md-6 mt-3">
            <table class="table">
                <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Rol</th>
                <th scope="col">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Editar Eliminar</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Editar Eliminar</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry the Bird</td>
                <td>@twitter</td>
                <td></td>
                <td>Editar Eliminar</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    
</div>

<?php
    require "includes/footer.php";
?>