<?php

namespace App\Http\Controllers;

use App\Models\Proyectos;
use Illuminate\Http\Request;
use PDF;

class ProyectosController extends Controller
{
    //

    public function listar(){
        $Proyectos = new Proyectos();
        $resultados = $Proyectos::select()->get()->toArray();
        return $resultados;
    }

    public function obtener($id){
        $Proyectos = new Proyectos();
        $resultados = $Proyectos::find($id)->toArray();
        return $resultados;
    }

    public function nuevo(Request $request){
        $Proyectos = new Proyectos();
        $Proyectos->NombreProyecto = $request->nombre_proyecto;
        $Proyectos->FuenteFondos = $request->fuente_fondos;
        $Proyectos->MontoPlanificado = $request->monto_planificado;
        $Proyectos->MontoPatrocinado = $request->monto_patrocinado;
        $Proyectos->MontoFondosPropios = $request->monto_fondos_propios;
        $afectados = $Proyectos->save();
        return $afectados;
    }

    public function actualizar(Request $request){
        //dd($request->id);
        $Proyectos = new Proyectos();
        $afectados = $Proyectos::where('id',$request->id)
                                    ->update([
                                        "NombreProyecto"=>$request->nombre_proyecto,
                                        "FuenteFondos"=>$request->fuente_fondos,
                                        "MontoPlanificado"=>$request->monto_planificado,
                                        "MontoPatrocinado"=>$request->monto_patrocinado,
                                        "MontoFondosPropios"=>$request->monto_fondos_propios
                                    ]);
        return $afectados;
    }

    public function eliminar($id){
        $Proyectos = new Proyectos();
        $afectados = $Proyectos::where('id',$id)->delete();
        return $afectados;
    }


    public function informe($proyectos){
        //$Proyectos = new Proyectos();
        //$imagen = Storage::get('./storage/app/public/logo-csj.png');
        //$imagen = Storage::disk('public')->path('logo/logo-csj.png');
        //$imagen = public_path().Storage::url("logo-csj.png");
        $data = array("proyectos"=>$proyectos);
        $pdf = PDF::loadView('informe',compact("data"))->setPaper('a4', 'landscape');;
        //return $pdf->stream("prueba.pdf");
        return $pdf->download("informe.pdf");
        //return $data;
    }
}
