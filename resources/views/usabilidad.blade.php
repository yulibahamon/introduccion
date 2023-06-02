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
              <a class="navbar-brand" href="usabilidad">Usabilidad</a>
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
        <h1 class="mt-4">Usabilidad</h1>
        <label for="campo1" class="form-label">La capacidad del software de ser entendido, aprendido, usado y atractivo al usuario, cuando es utilizado bajo las condiciones especificadas</label>
      </div>
      <form method="post" action="/resultados" onsubmit="sumarValoresusabi(event)">
        
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
                <td>3.1</td>
                <td>Entendimiento</td>
                <td>La capacidad del software para  permitir al usuario entender si el 
                    software  es  adecuado,  y  cómo  puede ser  utilizado  para  las  tareas  y  las condiciones particulares de la aplicación.<br>
                    Esto dependerá de la documentación y de las impresiones iniciales dadas por el software.
                    </td>
                <td><input type="text" class="form-control" name="%valor31" id="valor31"></td>
                <td><input type="text" class="form-control" name="%ob31"></td>
            </tr>
            <tr>
                <td>3.2</td>
                <td>Aprendizaje</td>
                <td>La capacidad del  software para  permitir al usuario aprender su aplicación.  Un aspecto importante a considerar aquí es la documentación del software.</td>
                <td><input type="text" class="form-control" name="%valor32" id="valor32"></td>
                <td><input type="text" class="form-control" name="%ob32"></td>
            </tr>
            <tr>
              <td>3.3</td>
              <td>Operabilidad</td>
              <td>La  capacidad  del  software  para  permitir  al  usuario  operarlo  y controlarlo.<br>
                Los aspectos de propiedad, de cambio, de adaptabilidad y de instalación pueden afectar la operabilidad.
                </td>
              <td><input type="text" class="form-control" name="%valor33" id="valor33"></td>
              <td><input type="text" class="form-control" name="%ob33"></td>
          </tr>
          <tr>
            <td>3.4</td>
            <td>Atracción</td>
            <td>La capacidad del  software de ser atractivo al usuario.<br>
                Esto se refiere a las cualidades del software para hacer el software más atractivo al usuario, tal como el uso del color y la naturaleza del diseño gráfico
                </td>
            <td><input type="text" class="form-control" name="%valor34"id="valor34"></td>
            <td><input type="text" class="form-control" name="%ob34"></td>
        </tr>
        <tr>
          <td>3.5</td>
          <td>Conformidad de la funcionalidad</td>
          <td>La  capacidad  del  software  para  adherirse  a  los  estándares, convenciones, guías de estilo o regulaciones relacionadas a su usabilidad. </td>
          <td><input type="text" class="form-control" name="%valor35" id="valor35"></td>
          <td><input type="text" class="form-control" name="%ob35"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
        <td><input type="text" class="form-control" id="resul_suma_usabili" readonly></td>
        <td><h5>de 15</h5></td>
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
    function sumarValoresusabi(event) {
      event.preventDefault(); // Evita que el formulario se envíe
    
      // Obtén los valores de los campos de entrada
      var valor31 = parseInt(document.getElementById('valor31').value) || 0;
      var valor32 = parseInt(document.getElementById('valor32').value) || 0;
      var valor33 = parseInt(document.getElementById('valor33').value) || 0;
      var valor34 = parseInt(document.getElementById('valor34').value) || 0;
      var valor35 = parseInt(document.getElementById('valor35').value) || 0;
    
      if (valor31 < 0 || valor31 > 3 ||
      valor32 < 0 || valor32 > 3 ||
      valor33 < 0 || valor33 > 3 ||
      valor34 < 0 || valor34 > 3 ||
      valor35 < 0 || valor35 > 3) {
    alert("Los valores deben estar entre 0 y 3.");
    return; // Detiene la ejecución si los valores son inválidos
  }
      // Realiza la suma
      var suma = valor31 + valor32 + valor33 + valor34 + valor35;
    
      // Asigna el resultado a la variable y muestra el valor en el campo correspondiente
      var resul_suma_usabili = suma;
      document.getElementById('resul_suma_usabili').value = resul_suma_usabili;
    }
    </script>
