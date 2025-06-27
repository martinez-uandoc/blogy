<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iniciar sesión</title>
    @vite(["resources/css/app.css", "resources/js/app.js"])
    <style>
        body{
            background: #333;
        }
    </style>
</head>
<body>
    <div class="container vh-100 d-flex align-items-center">
        <div class="row justify-content-center w-100">
            <form class="col-lg-4 border rounded shadow p-4 bg-white" action="{{ route("admin.entrar") }}" method="POST">
                
                
                {{ csrf_field() }}
                
                
                
                <h4 class="text-center m-0">Iniciar sesión</h4>
                <hr class="my-4">
                <label for="correo">Correo electrónico</label>
                <input type="email" name="correo" id="correo" class="form-control form-control-lg">
                <br>
                <label for="contrasena">Contraseña</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control form-control-lg">
                <button class="btn btn-lg btn-primary w-100 mt-4">Entrar</button>
            </form>
        </div>
    </div>
</body>
</html>