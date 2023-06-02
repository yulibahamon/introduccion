<!DOCTYPE html>
<html>
<head>
    <title>Ges.Calidad 2.0</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="nav-link"  href="/">Portada</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link" href="parametros">Parametros</a>
              <a class="nav-link" href="funcionalidad">Funcionalidad</a>
              <a class="nav-link" href="fiabilidad">Fiabilidad</a>
              <a class="nav-link" href="usabilidad">Usabilidad</a>
              <a class="nav-link" href="eficiencia">Eficiencia</a>
              <a class="nav-link" href="cap_mantenimiento">Cap de matenimiento</a>
              <a class="nav-link" href="portabilidad">Portabilidad</a>
              <a class="navbar-brand" href="calidad_uso">Calidad en uso</a>
              <a class="nav-link" href="resultados">Resultados</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="mt-4">Calidad en uso</h1>
        <label for="campo1" class="form-label"> La capacidad del software para permitirles a usuarios específicos lograr las metas propuestas con eficacia, 
            productividad, seguridad y satisfacción, en contextos especificados de uso.</label>
      </div>
      <form method="post" action="/resultados" onsubmit="sumarValorescali(event)">
       
      <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Item</th>
                <th scope="col">Descripción</th>
                <th scope="col">Valor</th>
                <th scope="col">Observaciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>7.1</td>
                <td>Eficacia</td>
                <td>La capacidad del  software para permitir a los usuarios lograr las metas 
                    especificadas con exactitud e integridad, en un contexto especificado de uso.</td>
                <td><input type="text" class="form-control" name="%valor71" id="valor71"></td>
                <td><input type="text" class="form-control" name="%ob71"></td>
            </tr>
            <tr>
                <td>7.2</td>
                <td>Productividad</td>
                <td>La capacidad del software para  permitir a los usuarios emplear cantidades  apropiadas  de  recursos, en  relación  a  la  eficacia
                     lograda  en  un contexto especificado de uso.<br>
                    Los recursos relevantes pueden incluir: tiempo para completar la tarea, esfuerzo del usuario, materiales o costo financiero.
                    </td>
                <td><input type="text" class="form-control" name="%valor72" id="valor72"></td>
                <td><input type="text" class="form-control" name="%ob72"></td>
            </tr>
            <tr>
              <td>7.3</td>
              <td>Seguridad</td>
              <td>La capacidad del software para lograr niveles aceptables de riesgo de daño a las personas, institución, software, propiedad (licencias, contratos de uso de software) o entorno, en un contexto especificado de uso. Los riesgos son normalmente el resultado de deficiencias en la funcionalidad
                (incluyendo seguridad), fiabilidad, usabilidad o facilidad de mantenimiento.
                </td>
              <td><input type="text" class="form-control" name="%valor73" id="valor73"></td>
              <td><input type="text" class="form-control" name="%ob73"></td>
          </tr>
          <tr>
            <td>7.4</td>
            <td>Satisfacción</td>
            <td>La capacidad del software para  satisfacer a los usuarios en un contexto especificado de uso.<br>
                La satisfacción es la respuesta del usuario a la interacción con el producto, e incluye las actitudes hacia el uso del producto.
                </td>
            <td><input type="text" class="form-control" name="%valor74"id="valor74"></td>
            <td><input type="text" class="form-control" name="%ob74"></td>
        </tr>
        <tr>
          <td>7.5</td>
          <td>Mercadeo</td>
          <td>El tiempo que tiene el software o proveedor en el caso del que producto sea a la medida en el mercado.<br>
             Menor a un año=0,  de 1 a 2 años =1, de 2 a 3 años=2   y de mas de 3 años=3</td>
          <td><input type="text" class="form-control" name="%valor75" id="valor75"></td>
          <td><input type="text" class="form-control" name="%ob75"></td>
      </tr>
      <tr>
        <tr>
            <td>7.6</td>
            <td>Estandarizacion</td>
            <td>Numero de Instalaciones en diferentes empresas locales, si es un producto a la medida Numero de Softwares instalados por el proveedor.<br>
                Ninguno=0, de 1 a 3=1 de 4 a 6=2 , mas 6 =3</td>
            <td><input type="text" class="form-control" name="%valor76" id="valor76"></td>
            <td><input type="text" class="form-control" name="%ob76"></td>
        </tr>
        <td></td>
        <td></td>
        <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
        <td><input type="text" class="form-control" id="resul_suma_funcio" readonly></td>
        <td><h5>de 18</h5></td>
        </tr>
        </tbody>
    </table>
      </form>
      <script src="{{ asset('js/app.js') }}"></script>
      <div class="card">
        <div class="card-header">
          <h3>Crtierios de aceptación</h3>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>0 No cumple de 0% a un 30% <br>
                1	Cumple de 31% a 50% <br>
                2	Cumple de 51% a 89% <br>
                3	Cumple con o mas del 90%
                </p>
          </blockquote>
        </div>
      </div>
</body>
</html>
<script>
    function sumarValorescali(event) {
      event.preventDefault(); // Evita que el formulario se envíe
    
      // Obtén los valores de los campos de entrada
      var valor71 = parseInt(document.getElementById('valor71').value) || 0;
      var valor72 = parseInt(document.getElementById('valor72').value) || 0;
      var valor73 = parseInt(document.getElementById('valor73').value) || 0;
      var valor74 = parseInt(document.getElementById('valor74').value) || 0;
      var valor75 = parseInt(document.getElementById('valor75').value) || 0;
      var valor76 = parseInt(document.getElementById('valor76').value) || 0;
      if (valor71 < 0 || valor71 > 3 ||
      valor72 < 0 || valor72 > 3 ||
      valor73 < 0 || valor73 > 3 ||
      valor74 < 0 || valor74 > 3 ||
      valor75 < 0 || valor75 > 3) {
    alert("Los valores deben estar entre 0 y 3.");
    return; // Detiene la ejecución si los valores son inválidos
  }
      // Realiza la suma2
      var suma = valor71 + valor72 + valor73 + valor74 + valor75;
    
      // Asigna el resultado a la variable y muestra el valor en el campo correspondiente
      var resul_suma_funcio = suma;
      document.getElementById('resul_suma_funcio').value = resul_suma_funcio;
    }
    </script>
