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
          <a class="navbar-brand" href="/">Portada</a>
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
                <a class="nav-link" href="resultados">Resultados</a>
            </div>
          </div>
        </div>
      </nav>
    <div class="container">
        <h1 class="mt-4">Softwate de gestion de calidad 2.0</h1>

        <form action="/guardar" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <label for="campo1" class="form-label">Fecha:</label>
                    <input type="text" class="form-control" name="campo1" id="campo1">
                </div>
                <div class="col">
                    <label for="campo2" class="form-label">Ciudad:</label>
                    <input type="text" class="form-control" name="campo2" id="campo2">
                </div>
                <div class="col">
                    <label for="campo2" class="form-label">Telefono:</label>
                    <input type="text" class="form-control" name="campo2" id="campo2">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="campo1" class="form-label">Nombre del software:</label>
                    <input type="text" class="form-control" name="campo1" id="campo1">
                </div>
                <div class="col">
                    <label for="campo2" class="form-label">Empresa:</label>
                    <input type="text" class="form-control" name="campo2" id="campo2">
                </div>
            </div>
            
            <h3 class="mt-4">Objetivos generales del software:</h3>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>
              <h3 class="mt-4">Objetivos especificos del software:</h3>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
              </div>

            <h3 class="mt-4">Participantes:</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Cargo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">ID</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type="text" class="form-control" name="cargo"></td>
                        <td><input type="text" class="form-control" name="nombre"></td>
                        <td><input type="text" class="form-control" name="id"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="cargo"></td>
                        <td><input type="text" class="form-control" name="nombre"></td>
                        <td><input type="text" class="form-control" name="id"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="cargo"></td>
                        <td><input type="text" class="form-control" name="nombre"></td>
                        <td><input type="text" class="form-control" name="id"></td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" name="cargo"></td>
                        <td><input type="text" class="form-control" name="nombre"></td>
                        <td><input type="text" class="form-control" name="id"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html> 
               
