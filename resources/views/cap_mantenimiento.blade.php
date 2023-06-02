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
              <a class="navbar-brand" href="cap_mantenimiento">Cap de matenimiento</a>
              <a class="nav-link" href="portabilidad">Portabilidad</a>
              <a class="nav-link" href="calidad_uso">Calidad en uso</a>
              <a class="nav-link" href="resultados">Resultados</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="mt-4">Capacidad de mantenimiento</h1>
        <label for="campo1" class="form-label">Capacidad del software para ser modificado. Las modificaciones pueden incluir correcciones, mejoras o adaptación del software a cambios en el entorno, y especificaciones de requerimientos funcionales. </label>
      </div>
      <form method="post" action="/resultados" onsubmit="sumarValorescap(event)">
       
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
                <td>5.1</td>
                <td>Capacidad de ser analizado</td>
                <td>La  capacidad  del  software  para  atenerse  a  diagnósticos  de deficiencias o causas de fallas en el software o la identificación de las partes a ser modificadas.</td>
                <td><input type="text" class="form-control" name="%valor51" id="valor51"></td>
                <td><input type="text" class="form-control" name="%ob51"></td>
            </tr>
            <tr>
                <td>5.2</td>
                <td>Cambiabilidad</td>
                <td>La capacidad del software para permitir que una determinada modificación sea implementada. Implementación incluye codificación, diseño y documentación de cambios.<br>
                    Si el software va a ser modificado por el usuario final, la cambiabilidad podría afectar la operabilidad.
                    </td>
                <td><input type="text" class="form-control" name="%valor52" id="valor52"></td>
                <td><input type="text" class="form-control" name="%ob52"></td>
            </tr>
            <tr>
              <td>5.3</td>
              <td>Estabilidad</td>
              <td>La capacidad del software para evitar efectos inesperados debido a modificaciones del software.</td>
              <td><input type="text" class="form-control" name="%valor53" id="valor53"></td>
              <td><input type="text" class="form-control" name="%ob53"></td>
          </tr>
          <tr>
            <td>5.4</td>
            <td>Facilidad de prueba</td>
            <td>La capacidad del software para permitir que las modificaciones sean validadas</td>
            <td><input type="text" class="form-control" name="%valor54"id="valor54"></td>
            <td><input type="text" class="form-control" name="%ob54"></td>
        </tr>
        <tr>
          <td>5.5</td>
          <td>Conformidad de facilidad de mantenimiento</td>
          <td>La  capacidad  del  software  para   adherirse  a  estándares  o  convenciones relativas a la facilidad de mantenimiento.</td>
          <td><input type="text" class="form-control" name="%valor55" id="valor55"></td>
          <td><input type="text" class="form-control" name="%ob55"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
        <td><input type="text" class="form-control" id="resul_suma_cap" readonly></td>
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
    function sumarValorescap(event) {
      event.preventDefault(); // Evita que el formulario se envíe
    
      // Obtén los valores de los campos de entrada
      var valor51 = parseInt(document.getElementById('valor51').value) || 0;
      var valor52 = parseInt(document.getElementById('valor52').value) || 0;
      var valor53 = parseInt(document.getElementById('valor53').value) || 0;
      var valor54 = parseInt(document.getElementById('valor54').value) || 0;
      var valor55 = parseInt(document.getElementById('valor55').value) || 0;
    
      if (valor51 < 0 || valor51 > 3 ||
      valor52 < 0 || valor52 > 3 ||
      valor53 < 0 || valor53 > 3 ||
      valor54 < 0 || valor54 > 3 ||
      valor55 < 0 || valor55 > 3) {
    alert("Los valores deben estar entre 0 y 3.");
    return; // Detiene la ejecución si los valores son inválidos
  }
      // Realiza la suma2
      var suma = valor51 + valor52 + valor53 + valor54 + valor55;
    
      // Asigna el resultado a la variable y muestra el valor en el campo correspondiente
      var resul_suma_cap = suma;
      document.getElementById('resul_suma_cap').value = resul_suma_cap;
    }
    </script>
