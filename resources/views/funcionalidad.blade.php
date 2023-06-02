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
              <a class="navbar-brand" href="funcionalidad">Funcionalidad</a>
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
        <h1 class="mt-4">Funcionalidad</h1>
        <label for="campo1" class="form-label">La capacidad del software para proveer las funciones que satisfacen 
            las necesidades explícitas e implícitas cuando el software se utiliza bajo condiciones específicas </label>
      </div>
      <form method="post" action="/resultados" onsubmit="sumarValoresfuncio(event)">
       
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
                <td>1.1</td>
                <td>Adecuacion</td>
                <td>La capacidad del  software para proveer un adecuado conjunto de funciones para las tareas y objetivos especificados por el usuario.<br>
                    Ejemplos de adecuación son la composición orientada a tareas de funciones a partir de sub funciones que las constituyen,  y las capacidades de las tablas.</td>
                <td><input type="text" class="form-control" name="%valor11" id="valor11"></td>
                <td><input type="text" class="form-control" name="%ob11"></td>
            </tr>
            <tr>
                <td>1.2</td>
                <td>Exactitud</td>
                <td>La capacidad del  software para proveer los resultados o efectos acordados con un grado necesario de precisión.</td>
                <td><input type="text" class="form-control" name="%valor12" id="valor12"></td>
                <td><input type="text" class="form-control" name="%ob12"></td>
            </tr>
            <tr>
              <td>1.3</td>
              <td>Interoperabilidad</td>
              <td>La capacidad del software de interactuar con uno o más sistemas especificados. La interoperabilidad  se utiliza en lugar de compatibilidad para evitar una posible ambigüedad con la reemplazabilidad.</td>
              <td><input type="text" class="form-control" name="%valor13" id="valor13"></td>
              <td><input type="text" class="form-control" name="%ob13"></td>
          </tr>
          <tr>
            <td>1.4</td>
            <td>Seguridad</td>
            <td>La capacidad del software para proteger la información y los datos de modo que las personas o los sistemas no   autorizados
                no puedan leerlos o modificarlos, y a las personas o  sistemas autorizados  
                no se les niegue el acceso a ellos. La seguridad en un sentido amplio se define como característica de la calidad en uso, 
                pues no se relaciona con el    software solamente, sino con todo un sistema</td>
            <td><input type="text" class="form-control" name="%valor14"id="valor14"></td>
            <td><input type="text" class="form-control" name="%ob14"></td>
        </tr>
        <tr>
          <td>1.5</td>
          <td>Conformidad de la funcionalidad</td>
          <td>La  capacidad  del software  de  adherirse  a  los  estándares, convenciones o 
            regulaciones legales y  prescripciones similares referentes a la funcionalidad. </td>
          <td><input type="text" class="form-control" name="%valor15" id="valor15"></td>
          <td><input type="text" class="form-control" name="%ob15"></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td class="form-label fs-5" >  <input type="submit" value="Total" name="submit"></td>
        <td><input type="text" class="form-control" id="resul_suma_funcio" readonly></td>
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
    function sumarValoresfuncio(event) {
      event.preventDefault(); // Evita que el formulario se envíe
    
      // Obtén los valores de los campos de entrada
      var valor11 = parseInt(document.getElementById('valor11').value) || 0;
      var valor12 = parseInt(document.getElementById('valor12').value) || 0;
      var valor13 = parseInt(document.getElementById('valor13').value) || 0;
      var valor14 = parseInt(document.getElementById('valor14').value) || 0;
      var valor15 = parseInt(document.getElementById('valor15').value) || 0;
    
      if (valor11 < 0 || valor11 > 3 ||
      valor12 < 0 || valor12 > 3 ||
      valor13 < 0 || valor13 > 3 ||
      valor14 < 0 || valor14 > 3 ||
      valor15 < 0 || valor15 > 3) {
    alert("Los valores deben estar entre 0 y 3.");
    return; // Detiene la ejecución si los valores son inválidos
  }
      // Realiza la suma2
      var suma = valor11 + valor12 + valor13 + valor14 + valor15;
    
      // Asigna el resultado a la variable y muestra el valor en el campo correspondiente
      var resul_suma_funcio = suma;
      document.getElementById('resul_suma_funcio').value = resul_suma_funcio;
    }
    </script>
