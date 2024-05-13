<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RegistroEmpresa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
    @csrf
    <style>
        .containerDos {
            margin-top: 50px; /* Ajusta el margen superior para que no quede tan arriba */
        }
    </style>
</head>
<body>
    <div class="containerDos">
        <div class="row">
            <div class="col-lg-12 text-center"> <!-- Cambiado a text-left para alinear el texto a la izquierda -->
                <h3>EMPRESA</h3>
                <br>
            </div>
            <div class="col-lg-12"> <!-- Cambiado a text-left para alinear el texto a la izquierda -->
                <h2>Registro</h2>
                <h5>¡Estamos encantados de tenerte por aquí!</h5> <!-- Subtítulo agregado -->
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 text-center">
                    @csrf
                    <div class="mb-3">
                        <label for="campo1" class="form-label"></label>
                        <input type="text" class="form-control" id="campo1" placeholder="Nombre de la empresa">
                    </div>
                    <div class="mb-3">
                        <label for="campo3" class="form-label"></label>
                        <input type="text" class="form-control" id="campo3" placeholder="NIT">
                    </div>
                    <div class="mb-3">
                        <label for="campo5" class="form-label"></label>
                        <input type="text" class="form-control" id="campo5" placeholder="País">
                    </div>
                    <div class="mb-3">
                        <label for="campo7" class="form-label"></label>
                        <input type="text" class="form-control" id="campo7" placeholder="Industria">
                    </div>
                    <div class="mb-3">
                        <label for="campo9" class="form-label"></label>
                        <input type="text" class="form-control" id="campo9" placeholder="Nombre representante ">
                    </div>
                </form>
            </form>
        </div>
        <div class="col-lg-6">
            <form>
                    <div class="mb-3">
                        <label for="campo2" class="form-label"></label>
                        <input type="text" class="form-control" id="campo2" placeholder="Cargo del representante ">
                    </div>
                    <div class="mb-3">
                        <label for="campo4" class="form-label"></label>
                        <input type="text" class="form-control" id="campo4" placeholder="Identificación del  representante ">
                    </div>
                    <div class="mb-3">
                        <label for="campo6" class="form-label"></label>
                        <input type="text" class="form-control" id="campo6" placeholder="Correo electrónico ">
                    </div>
                    <div class="mb-3">
                        <label for="campo8" class="form-label"></label>
                        <input type="text" class="form-control" id="campo8" placeholder="Contraseña">
                    </div>
                    <div class="mb-3">
                        <label for="campo10" class="form-label"></label>
                        <input type="text" class="form-control" id="campo10" placeholder="Confirmar contraseña ">
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-12 text-center">
                <button type="button" class="btn btn-primary-r">Registrarse</button> 
            </div>
        </div>
    </div>
</body>
</html>