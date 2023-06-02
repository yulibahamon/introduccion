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
              <a class="navbar-brand" href="portabilidad">Portabilidad</a>
              <a class="nav-link" href="calidad_uso">Calidad en uso</a>
              <a class="nav-link" href="resultados">Resultados</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="mt-4">Portabilidad</h1>
        <label for="campo1" class="form-label">La capacidad del software para ser trasladado de un entorno a otro. El entorno puede incluir entornos organizacionales, de hardware o de software.</label>
      </div>
      <form method="post" action="/resultados" onsubmit="sumarValorespor(event)">
       
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
                <td>6.1</td>
                <td>Adaptabilidad</td>
                <td>La capacidad del software para ser adaptado a diferentes entornos especificados sin aplicar acciones o medios diferentes de los previstos para el propósito del software considerado.
                    Adaptabilidad incluye la escalabilidad de capacidad interna (Ejemplo: Campos en pantalla, tablas, volúmenes de transacciones, formatos de reporte, etc.).<br>
                    Si  el  software  va  a   ser  adaptado  por  el  usuario  final,  la  adaptabilidad corresponde  a  la  conveniencia de  la  individualización,  y  podría  afectar  la operabilidad.
                    </td>
                <td><input type="text" class="form-control" name="%valor61" id="valor61"></td>
                <td><input type="text" class="form-control" name="%ob61"></td>
            </tr>
            <tr>
                <td>6.2</td>
                <td>Facilidad de instalación</td>
                <td>La  capacidad  del  software  para  ser  instalado  en  un  ambiente especificado.<br>
                    Si el software va a ser instalado por el usuario final, puede afectar la propiedad y operatividad resultantes
                    </td>
                <td><input type="text" class="form-control" name="%valor62" id="valor62"></td>
                <td><input type="text" class="form-control" name="%ob62"></td>
            </tr>
            <tr>
              <td>6.3</td>
              <td>Coexistencia</td>
              <td>La capacidad del software para coexistir con otros productos de software independientes dentro de un  mismo entorno, compartiendo  recursos comunes.</td>
              <td><input type="text" class="form-control" name="%valor63" id="valor63"></td>
              <td><input type="text" class="form-control" name="%ob63"></td>
          </tr>
          <tr>
            <td>6.4</td>
            <td>Reemplazabilid ad</td>
            <td>La  capacidad  del  software  para  ser  utilizado  en  lugar  de  otro software, para el mismo propósito y  en el mismo entorno.<br>
                Por  ejemplo,  la  reemplazabilidad  de  una  nueva  versión  de  un  software es importante para el usuario cuando dicho software es actualizado (actualizaciones, upgrades).
                </td>
            <td><input type="text" class="form-control" name="%valor64"id="valor64"></td>
            <td><input type="text" class="form-control" name="%ob64"></td>
        </tr>
        <tr>
          <td>6.5</td>
          <td>Conformidad de portabilidad</td>
          <td> La  capacidad  del  software  para  adherirse  a  estándares  o  convenciones relacionados a la portabilidad.</td>
          <td><input type="text" class="form-control" name="%valor65" id="valor65"></td>
          <td><input type="text" class="form-control" name="%ob65"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
        <td><input type="text" class="form-control" id="resul_suma_port" readonly></td>
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
    function sumarValorespor(event) {
      event.preventDefault(); // Evita que el formulario se envíe
    
      // Obtén los valores de los campos de entrada
      var valor61 = parseInt(document.getElementById('valor61').value) || 0;
      var valor62 = parseInt(document.getElementById('valor62').value) || 0;
      var valor63 = parseInt(document.getElementById('valor63').value) || 0;
      var valor64 = parseInt(document.getElementById('valor64').value) || 0;
      var valor65 = parseInt(document.getElementById('valor65').value) || 0;
    
      if (valor61 < 0 || valor61 > 3 ||
      valor62 < 0 || valor62 > 3 ||
      valor63 < 0 || valor63 > 3 ||
      valor64 < 0 || valor64 > 3 ||
      valor65 < 0 || valor65 > 3) {
    alert("Los valores deben estar entre 0 y 3.");
    return; // Detiene la ejecución si los valores son inválidos
  }
      // Realiza la suma2
      var suma = valor61 + valor62 + valor63 + valor64 + valor65;
    
      // Asigna el resultado a la variable y muestra el valor en el campo correspondiente
      var resul_suma_port = suma;
      document.getElementById('resul_suma_port').value = resul_suma_port;
    }
    </script>
