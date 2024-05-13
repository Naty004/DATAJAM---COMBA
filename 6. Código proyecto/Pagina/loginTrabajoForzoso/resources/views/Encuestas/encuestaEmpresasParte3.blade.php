<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encuesta</title>
    <link rel="stylesheet" href="{{ asset('css/encuesta.css') }}">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="/salir" class="btnSalir">Salir</a>

    <div class="container">
        <h1>Empresas</h1>
        <h3>SECCIÓN C: Mecanismo de Respuesta y reparación respecto a quejas y reclamos</h3>
        
        <form action="/encuesta/respuesta" method="post">
            @csrf

            <input type="hidden" name="encuesta_id" value="1">
            <p>27. ¿La organización cuenta con mecanismos por los cuales los trabajadores manifiesten sus quejas y reclamos?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>
            <label class="opcion opcion3">
                <input type="radio" name="respuesta" value="opcion3">
                No lo sabe
            </label>


            <p>28.¿La organización cuenta con mecanismos para investigar y remediar un incidente de esclavitud moderna vinculado a sus trabajadores directos, proveedores y comunidades afectadas por sus actividades comerciales?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>
            <label class="opcion opcion3">
                <input type="radio" name="respuesta" value="opcion3">
                No lo sabe
            </label>

            <p>29. ¿La organización cuenta con acompañamiento de alguna empresa asesora neutral para el seguimiento de los riesgos de esclavitud moderna? </p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>
            <label class="opcion opcion3">
                <input type="radio" name="respuesta" value="opcion3">
                No lo sabe
            </label>

            <p>30. ¿La organización ha establecido sistema de monitoreo que generen alarmas ante la presencia de incidentes de esclavitud moderna?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>
            <label class="opcion opcion3">
                <input type="radio" name="respuesta" value="opcion3">
                No lo sabe
            </label>

            <button type="submit">Enviar respuesta</button>
        </form>

    </div>

</body>
</html>