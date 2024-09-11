<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
require "includes/header.php";
?>
<div class="container">
    <div class="row">
        <div class="col col-12 col-md-6 text-center">
            <img id="logo-login" src="./public/assets/img/Delu24-logo.png" alt="Logo" class="img-fluid rounded">
        </div>
        <div class="col col-12 col-md-6">
            <form class="m-3" action="./index.php?controller=userController&action=authenticate" method="POST">
                <label for="email" class="form-label">Correo</label>
                <input type="text" name="email" id="email" class="form-control mb-3">
                <label for="password" class="form-label">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control mb-3">
                <button type="submit"class="btn btn-primary">Ingresar</button>
            </form>
        </div>
    </div>   
    <a href="./index.php?controller=PagesController&action=register">Ir a otra pestaña</a>
</div>

<?php
require "includes/footer.php";
?>