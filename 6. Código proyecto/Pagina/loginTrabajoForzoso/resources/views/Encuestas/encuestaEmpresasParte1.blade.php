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
        <h3>SECCIÓN A: Gobernanza y Políticas</h3>
        <h4>Responsabilidad:</h4>
        <form action="/encuesta/respuesta" method="post">
            @csrf

            <input type="hidden" name="encuesta_id" value="1">
            <p>1. ¿La Junta Directiva de la organización conoce la responsabilidad ante los riesgos de esclavitud moderna?</p>
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


            <p>2. ¿La Organización se interesa por dar atención y gestionar alternativas que generan acciones de esclavitud moderna en el sector operativo</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
              Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>

            <h4>Estrategias:</h4>
            <p>3. ¿La Junta Directiva a aprobado alguna gestión para evitar los riesgos de esclavitud moderna en la organización?</p>
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

            <h4>Compromiso pólitico:</h4>
            <p>4. ¿La organización cuenta con políticas que hayan sido publicadas, direccionadas a evitar la esclavitud moderna?</p>
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
            
            <h4>Políticas de implementación:</h4>
            <p>5. ¿Las políticas de la organización referidas a los riesgos de la esclavitud moderna han sido dadas a conocer a los socios y aliados estratégicos vinculados a los procesos operativos?</p>
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

            <p>6. ¿Se realizan planes de capacitación a la organización, de las políticas y compromisos referidos a la esclavitud moderna?</p>
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

            <h4>Evaluación de riesgos:</h4>
    <p>7. ¿La organización ha evaluado las áreas operativas donde existen mayores riesgos de presentarse esclavitud moderna?</p>
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

            <p>8. ¿Se hacen reportes a la Junta Directiva de la organización, de los riesgos de esclavitud moderna que se hayan presentado y las respuestas a estos incidentes? </p>
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

    <a href="/encuestaEmpresasParte2" class="btnSiguiente">Siguiente</a>
    </div>
</body>
</html>