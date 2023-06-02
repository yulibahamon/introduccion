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
              <a class="navbar-brand" href="fiabilidad">Fiabilidad</a>
              <a class="nav-link" href="usabilidad">Usabilidad</a>
              <a class="nav-link" href="eficiencia">Eficiencia</a>
              <a class="nav-link" href="cap_mantenimiento">Cap de matenimiento</a>
              <a class="nav-link" href="portabilidad">Portabilidad</a>
              <a class="nav-link" href="calidad_uso">Calidad en uso</a>
              <a class="nav-link" href="resultados">Resultados</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="mt-4">Fiabilidad</h1>
        <label for="campo1" class="form-label">La capacidad del software para mantener un nivel específico  de funcionamiento cuando se está utilizando bajo condiciones especificadas.</label>
      </div>
      <form method="post" action="/resultados" onsubmit="sumarValoresfiabili(event)">
       
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
                <td>2.1</td>
                <td>Madurez</td>
                <td>La capacidad del  software para  evitar fallas como resultado de errores en el software.</td>
                <td><input type="text" class="form-control" name="%valor21" id="valor21"></td>
                <td><input type="text" class="form-control" name="%ob21"></td>
            </tr>
            <tr>
                <td>2.2</td>
                <td>Tolerancia a errores</td>
                <td>La capacidad del producto de software para mantener un nivel especificado de 
                  funcionamiento en caso de errores del software o de incumplimiento de su interfaz especificada.<br>
                  El nivel especificado de funcionamiento puede incluir la falta de capacidad de seguridad
                  </td>
                <td><input type="text" class="form-control" name="%valor22" id="valor22"></td>
                <td><input type="text" class="form-control" name="%ob22"></td>
            </tr>
            <tr>
              <td>2.3</td>
              <td>Recuperabilidad</td>
              <td>La capacidad del software para restablecer un nivel especificado de funcionamiento y  recuperar los datos afectados directamente en el caso de una falla.<br>
                Después de una falla, un software a veces estará no disponible por cierto período del tiempo, intervalo en el cual se evaluará su recuperabilidad.
                </td>
              <td><input type="text" class="form-control" name="%valor23" id="valor23"></td>
              <td><input type="text" class="form-control" name="%ob23"></td>
          </tr>
          <tr>
            <td>1.4</td>
            <td>Conformidad de la fiabilidad</td>
            <td>La  capacidad  del  software  para  adherirse  a  las  normas, convenciones o regulaciones relativas a la fiabilidad</td>
            <td><input type="text" class="form-control" name="%valor24"id="valor24"></td>
            <td><input type="text" class="form-control" name="%ob24"></td>
        </tr>
      <tr>
        <td></td>
        <td></td>
        <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
        <td><input type="text" class="form-control" id="resul_suma_fiabili" readonly></td>
        <td><h5>de 12</h5></td>
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
    function sumarValoresfiabili(event) {
      event.preventDefault(); // Evita que el formulario se envíe
    
      // Obtén los valores de los campos de entrada
      var valor21 = parseInt(document.getElementById('valor21').value) || 0;
      var valor22 = parseInt(document.getElementById('valor22').value) || 0;
      var valor23 = parseInt(document.getElementById('valor23').value) || 0;
      var valor24 = parseInt(document.getElementById('valor24').value) || 0;
    
      if (valor21 < 0 || valor21 > 3 ||
      valor22 < 0 || valor22 > 3 ||
      valor23 < 0 || valor23 > 3 ||
      valor24 < 0 || valor24 > 3 ) {
    alert("Los valores deben estar entre 0 y 3.");
    return; // Detiene la ejecución si los valores son inválidos
  }
      // Realiza la suma2
      var suma = valor21 + valor22 + valor23 + valor24;
    
      // Asigna el resultado a la variable y muestra el valor en el campo correspondiente
      var resul_suma_fiabili = suma;
      document.getElementById('resul_suma_fiabili').value = resul_suma_fiabili;
    }
    </script>
