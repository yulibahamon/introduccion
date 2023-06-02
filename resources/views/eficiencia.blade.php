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
              <a class="navbar-brand" href="eficiencia">Eficiencia</a>
              <a class="nav-link" href="cap_mantenimiento">Cap de matenimiento</a>
              <a class="nav-link" href="portabilidad">Portabilidad</a>
              <a class="nav-link" href="calidad_uso">Calidad en uso</a>
              <a class="nav-link" href="resultados">Resultados</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="mt-4">Eficiencia</h1>
        <label for="campo1" class="form-label"> </label>
      </div>
      <form method="post" action="/resultados" onsubmit="sumarValoresefi(event)">
       
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
                <td>4.1</td>
                <td>Comportamiento de tiempos</td>
                <td>La capacidad del software para proveer tiempos adecuados de respuesta y procesamiento, y ratios de rendimiento cuando realiza su función bajo las condiciones establecidas.</td>
                <td><input type="text" class="form-control" name="%valor41" id="valor41"></td>
                <td><input type="text" class="form-control" name="%ob41"></td>
            </tr>
            <tr>
                <td>4.2</td>
                <td>Utilización de recursos</td>
                <td>La  capacidad  del software  para  utilizar   cantidades  y  tipos adecuados   de   recursos   cuando   este funciona   bajo   las   condiciones establecidas.<br>
                    Los recursos humanos están incluidos dentro del concepto de productividad.
                    </td>
                <td><input type="text" class="form-control" name="%valor42" id="valor42"></td>
                <td><input type="text" class="form-control" name="%ob42"></td>
            </tr>
            <tr>
              <td>4.3</td>
              <td>Conformidad de eficiencia</td>
              <td>La  capacidad  del  producto  de  software  para  adherirse  a  estándares  o convenciones relacionados a la eficiencia.</td>
              <td><input type="text" class="form-control" name="%valor43" id="valor43"></td>
              <td><input type="text" class="form-control" name="%ob43"></td>
          </tr>
      <tr>
        <td></td>
        <td></td>
        <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
        <td><input type="text" class="form-control" id="resul_suma_efi" readonly></td>
        <td><h5>de 9</h5></td>
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
    function sumarValoresefi(event) {
      event.preventDefault(); // Evita que el formulario se envíe
    
      // Obtén los valores de los campos de entrada
      var valor41 = parseInt(document.getElementById('valor41').value) || 0;
      var valor42 = parseInt(document.getElementById('valor42').value) || 0;
      var valor43 = parseInt(document.getElementById('valor43').value) || 0;
    
      if (valor41 < 0 || valor41 > 3 ||
      valor42 < 0 || valor42 > 3 ||
      valor43 < 0 || valor43 > 3) {
    alert("Los valores deben estar entre 0 y 3.");
    return; // Detiene la ejecución si los valores son inválidos
  }
      // Realiza la suma2
      var suma = valor41 + valor42 + valor43;
    
      // Asigna el resultado a la variable y muestra el valor en el campo correspondiente
      var resul_suma_efi = suma;
      document.getElementById('resul_suma_efi').value = resul_suma_efi;
    }
    </script>
