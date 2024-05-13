<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1>Bienvenido a nuestra aplicación</h1>
            <p>Por favor, seleccione una opción:</p>
            <div class="d-flex justify-content-center">
                <a  href="{{route ('inicioDos.index')}}" class="btn btn-primary me-3" onclick="location.href='/registro'">Registro</a>
                <a  href="{{route ('inicioUno.index')}}" class="btn btn-primary me-3" onclick="location.href='/registro'">Iniciar sesión</a>
            </div>
        </div>
    </div>
</body>
</html>
