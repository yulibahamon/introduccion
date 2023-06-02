<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('welcome');
});
Route::get('/parametros', function () {
    return view('parametros');
});
Route::get('/funcionalidad', function () {
  return view('funcionalidad');
});
Route::get('/fiabilidad', function () {
  return view('fiabilidad');
});
Route::get('/usabilidad', function () {
  return view('usabilidad');
});
Route::get('/eficiencia', function () {
  return view('eficiencia');
});
Route::get('/cap_mantenimiento', function () {
  return view('cap_mantenimiento');
});
Route::get('/portabilidad', function () {
  return view('portabilidad');
});
Route::get('/calidad_uso', function () {
  return view('calidad_uso');
});
Route::get('/resultados', function () {
  return view('resultados');
});
?>

