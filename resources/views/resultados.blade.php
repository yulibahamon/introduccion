<!DOCTYPE html>
<html>
<head>
    <title>Ges.Calidad 2.0</title>
    <!-- Incluye los estilos de Bootstrap -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="nav-link" href="/">Portada</a>
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
                <a class="nav-link" href="calidad_uso">Calidad en uso</a>
                <a class="navbar-brand" href="resultados">Resultados</a>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <h1 class="mt-4">Resultados</h1>
      </div>
      <form>
      <table class="table">
        <thead>
            <tr>
                <th scope="col">Codigo</th>
                <th scope="col">Item</th>
                <th scope="col">Descripción (condición de Normalidad)</th>
                <th scope="col">Valor</th>
                <th scope="col">Maximo</th>
                <th scope="col">%Resultado</th>
                <th scope="col">Maximo</th>
                <th scope="col">%Blobal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Funcionalidad</td>
                <td>La capacidad del software de cumplir con las funciones para satisfacer las necesidades explícitas e implícitas cuando es utilizado en condiciones específicas. </td>
                <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
                <td>15</td>
                <td><input type="text" class="form-control" id="funcionalidad" readonly></td>
                <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
                <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Fiabilidad</td>
                <td>La capacidad del software para asegurar un nivel  de funcionamiento adecuado cuando es utilizando en condiciones especificas. </td>
                <td><input type="text" class="form-control" name="$fiabilidad" id="fiabilidad"></td>
                <td>12</td>
                <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
                <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
                <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
            </tr>
            <tr>
              <td>3</td>
              <td>Usabilidad</td>
              <td>La capacidad del software de ser entendido, aprendido, y usado en forma fácil y atractiva</td>
              <td><input type="text" class="form-control" name="%usabilidad" id="usabilidad"></td>
              <td>15</td>
              <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
              <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
              <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
          </tr>
          <tr>
            <td>4</td>
            <td>Eficiencia</td>
            <td>La forma del desempeño adecuado, de acuerdo a al número recursos utilizados según las condiciones planteadas.</td>
            <td><input type="text" class="form-control" name="%eficiencia"id="eficiencia"></td>
            <td>9</td>
            <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
            <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
            <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
        </tr>
        <tr>
          <td>5</td>
          <td>Capacidad de mantenimiento</td>
          <td>La cualidad que tiene el software para ser modificado. Incluyendo correcciones o mejoras del software, a cambios en el entorno, y especificaciones de requerimientos funcionales. </td>
          <td><input type="text" class="form-control" name="%mantenimi" id="mantenimi"></td>
          <td>15</td>
          <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
        <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
        <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
      </tr>
      <tr>
        <td>6</td>
        <td>Portabilidad</td>
        <td>La capacidad que tiene el software para ser trasladado de un entorno a otro. cubriendo entornos organizacionales, de hardware o de software.</td>
        <td><input type="text" class="form-control" name="%portabili" id="portabili"></td>
        <td>15</td>
        <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
        <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
        <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
    </tr>
    <tr>
      <td>7</td>
      <td>Calidad de uso</td>
      <td>Capacidad del software para permitirles a usuarios lograr las metas propuestas con eficacia, productividad, seguridad y satisfacción, en contextos especificados de uso.</td>
      <td><input type="text" class="form-control" name="%calidad" id="calidad"></td>
      <td>9</td>
      <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
      <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
      <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td class="form-label fs-5" >  <input type="submit" value="Total Puntaje" name="submit"></td>
    <td><input type="text" class="form-control" id="resul_suma_prome" readonly></td>
    <td>De 99</td>
    <td><input type="text" class="form-control" id="resul_suma_prome" readonly></td>
    <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
      <td><input type="text" class="form-control" name="%funcionalidad" id="funcionalidad"></td>
    </tr>
        </tbody>
            
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
        
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 
