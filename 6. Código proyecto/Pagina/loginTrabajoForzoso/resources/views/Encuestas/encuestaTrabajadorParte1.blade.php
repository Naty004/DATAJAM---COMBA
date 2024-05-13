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
            <p>1. ¿Está al tanto de la existencia del trabajo forzoso?</p>
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

            <p>2. ¿Ha experimentado experiencias personales o ajenas de trabajo forzoso en su trabajo?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
              Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>

            <p>3. ¿Te sientes presionado para trabajar horas extras o en condiciones laborales que consideras injustas?</p>
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

            <p>4. ¿Has recibido alguna amenaza para realizar ciertas tareas o permanecer en tu puesto de trabajo?</p>
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
            
            <p>5. ¿En su trabajo se han tomado acciones frente al trabajo forzoso?</p>
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

            <p>6. ¿Crees que puedes recibir apoyo o ayuda para salir de una situación de trabajo forzoso en la empresa?</p>
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

    <p>7. ¿Cómo calificarías el ambiente laboral en tu trabajo?</p>
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

            <p>8. ¿Has recibido capacitación sobre tus derechos como trabajador? </p>
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
      
   

    <p>9. ¿Crees que la empresa tiene mecanismos efectivos para prevenir situaciones de trabajo forzoso? </p>
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


    <p>10. ¿Cómo describirías la comunicación entre los empleados y la dirección de la empresa en relación con las condiciones laborales </p>
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
            
        </form>
 

    <a href="/encuestaTrabajadorParte2" class="btnSiguiente">Siguiente</a>
       
    </div>
</body>
</html>