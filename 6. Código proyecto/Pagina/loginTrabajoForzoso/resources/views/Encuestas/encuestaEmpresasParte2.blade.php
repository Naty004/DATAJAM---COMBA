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
        <h3>SECCIÓN B: Evaluación de Riesgo y Debida Diligencia</h3>
        
        <form action="/encuesta/respuesta" method="post">
            @csrf
            <h4>Nuestras prácticas laborales:</h4>
            <input type="hidden" name="encuesta_id" value="1">

            <p>9. ¿Las condiciones laborales son dignas para el personal operativo?</p>
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


            <p>10. ¿Los trabajadores tienen un pago salarial justo y de prestaciones de acuerdo con la ley?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>

            <p>11. ¿Las horas extras que realizan los trabajadores son obligatorias y excesivas? </p>
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

            <p>12. ¿La jornada laboral se ajusta a la intensidad horaria de ley?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>
            

            <p>13. ¿Los trabajadores gozan de sus días de descanso laboral?</p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label> 

            <p>14. ¿Los trabajadores gozan de su hora de almuerzo en la organización? </p>
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

    <p>15. ¿Los trabajadores deben hacer algún reconocimiento económico para poder ser contratados en la organización?

 </p>
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

            <p>16. ¿Los trabajadores cuentan con condiciones de salubridad y seguridad laboral en la organización? </p>
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

            <p>17. ¿Los contratos laborales son elaborados en idioma y términos comprensibles para los trabajadores en la organización? </p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>

            <p>18. ¿Los trabajadores de la organización, gozan libremente de la disponibilidad de sus documentos de identificación personal </p>
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

            <p>19. ¿Los trabajadores de la organización tienen la libertad de suspender su contrato laboral? </p>
            <label class="opcion opcion1">
                <input type="radio" name="respuesta" value="opcion1">
               Si
            </label>
            <label class="opcion opcion2">
                <input type="radio" name="respuesta" value="opcion2">
                No
            </label>
    
            <p>20. ¿Los trabajadores tienen libertad de afiliarse al sindicato de trabajadores que hay en la organización? </p>
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

        <p>21. ¿En la organización se controla la edad de los trabajadores para no incurrir en la contratación infantil? </p>
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
      

        <p>22.  ¿Los trabajadores de la organización gozan de permisos para el desarrollo de actividades académicas o estudios?
 </p>
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
        
        <p>23. ¿Se presentan en la organización actos de discriminación en el trabajo?</p>
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

        <h4>Evaluación de riesgo y debida diligencia:</h4>
   <p>24. ¿En la organización se hace seguimiento a los proveedores para conocer si están inmersos en actividades que cumplan con los indicadores necesarios para ser catalogadas como esclavitud moderna?</p>
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

            <p>25. ¿La organización incluye a los trabajadores de proveedores en procesos de debida diligencia para el monitoreo de sus actividades dentro de la empresa?</p>
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

            <p>26. ¿La organización hace uso de herramientas de evaluación de riesgos para la medición de posibles aplicaciones de esclavitud moderna? (por ejemplo, herramientas de trazabilidad y mapeo de riesgos).</p>
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

    <a href="/encuestaEmpresasParte3" class="btnSiguiente">Siguiente</a>
    </div>
</body>
</html>