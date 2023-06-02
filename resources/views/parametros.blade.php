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
              <a class="navbar-brand" href="parametros">Parametros</a>
              <a class="nav-link" href="funcionalidad">Funcionalidad</a>
              <a class="nav-link" href="fiabilidad">Fiabilidad</a>
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
        <h1 class="mt-4">Parametros</h1>
        <label for="campo1" class="form-label">Seleccione los porcentajes según el criterio de evaluacion
          que desea aplicar correspondeinte a el software </label>
          <label for="campo1" class="form-label">Por ejemplo: Para la evaluación de un software bancario
            tendria mas peso las evaluciones de FUNCIONALIDAD y EFICIENCIA </label>
            <label for="campo1" class="form-label fs-5">Asi que estos valores se puede cambiar a criterio propio </label>
      </div>
      <form method="post"   action="resultados.balde.php" onsubmit=sumarValores(event)>
        <?php $resul_suma_prome = 0;?>
      <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Item</th>
                <th scope="col">Descripción</th>
                <th scope="col">Preguntas</th>
                <th scope="col">%Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Funcionalidad</td>
                <td>La capacidad del software de cumplir con las funciones para satisfacer las necesidades explícitas e implícitas cuando es utilizado en condiciones específicas. </td>
                <td>5</td>
                <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fiabilidad</td>
                <td>La capacidad del software para asegurar un nivel  de funcionamiento adecuado cuando es utilizando en condiciones especificas. </td>
                <td>4</td>
                <td><input type="text" class="form-control" name="$fiabilidad" id="fiabilidad"></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Usabilidad</td>
              <td>La capacidad del software de ser entendido, aprendido, y usado en forma fácil y atractiva</td>
              <td>5</td>
              <td><input type="text" class="form-control" name="%usabilidad" id="usabilidad"></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Eficiencia</td>
            <td>La forma del desempeño adecuado, de acuerdo a al número recursos utilizados según las condiciones planteadas.</td>
            <td>3</td>
            <td><input type="text" class="form-control" name="%eficiencia"id="eficiencia"></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Capacidad de mantenimiento</td>
          <td>La cualidad que tiene el software para ser modificado. Incluyendo correcciones o mejoras del software, a cambios en el entorno, y especificaciones de requerimientos funcionales. </td>
          <td>5</td>
          <td><input type="text" class="form-control" name="%mantenimi" id="mantenimi"></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Portabilidad</td>
        <td>La capacidad que tiene el software para ser trasladado de un entorno a otro. cubriendo entornos organizacionales, de hardware o de software.</td>
        <td>5</td>
        <td><input type="text" class="form-control" name="%portabili" id="portabili"></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Calidad de uso</td>
      <td>Capacidad del software para permitirles a usuarios lograr las metas propuestas con eficacia, productividad, seguridad y satisfacción, en contextos especificados de uso.</td>
      <td>6</td>
      <td><input type="text" class="form-control" name="%calidad" id="calidad"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
    <td>33</td>
    <td><input type="text" class="form-control" id="resul_suma_prome" readonly></td>
    </tr>
        </tbody>
    </table>
      </form>
      <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
<script>
  function sumarValores(event) {
    event.preventDefault(); // Evita el envío del formulario

    // Obtiene los valores de los campos de texto
    var funcionalidad = parseFloat(document.getElementById('funcionalidad').value);
    var fiabilidad = parseFloat(document.getElementById('fiabilidad').value);
    var usabilidad = parseFloat(document.getElementById('usabilidad').value);
    var eficiencia = parseFloat(document.getElementById('eficiencia').value);
    var mantenimi = parseFloat(document.getElementById('mantenimi').value);
    var portabili = parseFloat(document.getElementById('portabili').value);
    var calidad = parseFloat(document.getElementById('calidad').value);

    // Verifica si algún campo de texto está vacío
    if (!funcionalidad || !fiabilidad || !usabilidad || !eficiencia || !mantenimi || !portabili || !calidad) {
      alert('Todos los campos deben estar llenos. Por favor, ingrese los valores faltantes.');
      return; // Detiene la ejecución de la función
    }
    // Realiza la suma de los valores
    var suma = funcionalidad + fiabilidad + usabilidad + eficiencia + mantenimi + portabili + calidad;

    if (suma > 100) {
      alert('La suma no puede ser mayor a 100. Por favor, vuelve a ingresar los valores.');
      return; // Detiene la ejecución de la función
    }
    // Actualiza el valor del campo de texto de resultado
    document.getElementById('resul_suma_prome').value = suma;
  }
</script>

