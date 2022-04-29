<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Documento;
use App\Models\Estado;
use App\Models\Prospecto;
use DB;

class Prospecto extends Model
{
    use HasFactory;

    public $fillable = [
    'nombre_prospecto','primer_apellido','segundo_apellido','calle','numero','colonia','cp',
    'telefono','rfc','estatus','observaciones','promotor_id'
    ];

    public function CrearProspecto($prospectos,$file1,$file2,$file3,$promotor){
        DB::beginTransaction();
        try{
            $prospecto = Prospecto::insertGetId(
                [
               'nombre_prospecto' => $prospectos['nombre_prospecto'],
               'primer_apellido' =>  $prospectos['primer_apellido'],
               'segundo_apellido' => $prospectos['segundo_apellido'],
               'calle'  =>  $prospectos['calle'],
               'numero' =>  $prospectos['numero'],
               'colonia' => $prospectos['colonia'],
               'cp' =>  $prospectos['cp'],
               'telefono' => $prospectos['telefono'],
               'rfc' => $prospectos['rfc'],
               'estatus' => 1 ,
               'observaciones' => $prospectos['observaciones'],
               'promotor_id' => $promotor
            ]);
            self::CrearDocumento($prospecto,$file1,$file2,$file3);
            DB::commit();
           return  response()->noContent();
        }  catch (\Exception $e) {
            return response()->json(['status'=>false,'message'=> $e]);
            DB::rollback();
        }
    }
    

    public function CrearDocumento($prospecto,$file1,$file2,$file3){
        $documento = Documento::create(
            [
               'id_pro_doc' => $prospecto,
               'ine' =>  $file1,
               'acta_nacimiento' =>  $file2,
               'comprobante_pago' => $file3,
            ]);
            return response()->json(['status'=>true]);
    }

    public function BuscarProspecto($id)
    {
     
        $prospecto=Prospecto::find($id);
        return $prospecto;
    }

    public function ProspectoEstado($id)
    {
        $prospecto = DB::table('prospectos')->select('prospectos.id','nombre_prospecto','prospectos.primer_apellido',
        'prospectos.segundo_apellido','estados.estado')->
        leftjoin('estados','prospectos.estatus','estados.id')->
        leftjoin('promotores','promotores.id','prospectos.promotor_id')->
        where('promotor_id',$id)->get();
        return $prospecto;

    }

    public function ActualizarEstatus($datos,$id)
    {
    
        $prospecto=Prospecto::find($id);
        $prospecto->update($datos);


    }


}
