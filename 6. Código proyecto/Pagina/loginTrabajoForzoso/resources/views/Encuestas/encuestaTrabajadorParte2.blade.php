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
        <h1>Trabajador</h1>
        <form action="/encuesta/respuesta" method="post">
            @csrf

            <input type="hidden" name="encuesta_id" value="1">
            <p>11. ¿Crees que la empresa toma en serio las denuncias o quejas relacionadas con las condiciones laborales?</p>
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

            <p>12. ¿Crees que la empresa ofrece oportunidades de desarrollo profesional y crecimiento personal para todos los empleados?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
              Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
</label>
            <p>13. ¿Recibes un salario justo y adecuado por el trabajo que realizas?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>

            <p>14. ¿Has tenido que pagar por tu empleo o por los servicios proporcionados por la empresa (por ejemplo, transporte, alojamiento, uniformes)?</p>
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

            <p>15. ¿Has experimentado alguna forma de abuso físico, emocional o verbal en tu lugar de trabajo?</p>
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
            
            <p>16. ¿Has sido objeto de retención de documentos personales o identificación por parte de la empresa?</p>
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

            <p>17. ¿Has tenido acceso adecuado a descansos y tiempo libre durante tu jornada laboral?</p>
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

           <p>18. ¿Sientes que tienes el derecho de rechazar tareas o actividades que consideres peligrosas o inseguras?</p>
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

            <p>19. ¿Has tenido dificultades para recibir atención médica debido a tu trabajo? </p>
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

            <p>20. ¿Crees que la empresa tiene mecanismos efectivos para prevenir situaciones de trabajo forzoso? </p>
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