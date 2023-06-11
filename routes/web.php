<?php

use App\Http\Controllers\ProyectosController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/inicio', function () {
    return view('index');
});

/*Route::get('/ver', function(){
    return view('consultar');
});*/
//Route::get('/ver', [ProyectosController::class,'index'])->name("consultar");

Route::get('/listar-ver', function(){
    $proyecto = new ProyectosController;
    $proyectos = $proyecto->listar();
    $url = [
        "etiqueta"=> "Detalles",
        "url" => "details"
    ];
    return view('consultar',['proyectos'=>$proyectos,"url"=>$url,"breadcrumb"=>"Consultar Registros"]);
})->name("ver");

Route::get('/details/{id}', function($id){
    $proyecto = new ProyectosController;
    $proyecto = $proyecto->obtener($id);
    return ['proyecto'=>$proyecto];
});



Route::get('/listar-actualizar', function(){
    $proyecto = new ProyectosController;
    $proyectos = $proyecto->listar();
    $url = [
        "etiqueta"=> "Actualizar",
        "url" => "details-update"
    ];
    return view('actualizar',['proyectos'=>$proyectos,"url"=>$url,"breadcrumb"=>"Actualizar Registros"]);
})->name("actualizar");

Route::get('/details-update/{id}', function($id){
    $proyecto = new ProyectosController;
    $proyecto = $proyecto->obtener($id);
    return view('update',['proyecto'=>$proyecto,"url_post"=>"../update","breadcrumb"=>"Actualización del proyecto ".$proyecto["id"]." (".$proyecto["NombreProyecto"].")"]);
})->name("details-update");

Route::post('/update', function(Request $request){
    $proyecto = new ProyectosController;
    $afectados = $proyecto->actualizar($request);
    return $afectados;
})->name("update");




Route::get('/nuevo-registro', function(){
    return view('insertar',["url_post"=>"./insert","breadcrumb"=>"Nuevo Registro"]);
})->name("nuevo");


Route::post('/insert', function(Request $request){
    $proyecto = new ProyectosController;
    $afectados = $proyecto->nuevo($request);
    return $afectados;
})->name("insert");




Route::get('/listar-eliminar', function(){
    $proyecto = new ProyectosController;
    $proyectos = $proyecto->listar();
    $url = [
        "etiqueta"=> "Eliminar",
        "url" => "delete"
    ];
    return view('eliminar',['proyectos'=>$proyectos,"url"=>$url,"breadcrumb"=>"Eliminar Registros"]);
})->name("eliminar");

Route::get('/delete/{id}', function($id){
    $proyecto = new ProyectosController;
    $afectados = $proyecto->eliminar($id);
    return $afectados;
})->name("delete");




Route::get('/informe', function(){
    $proyecto = new ProyectosController;
    $proyectos = $proyecto->listar();
    $afectados = $proyecto->informe($proyectos);
    return $afectados;
})->name("informe");