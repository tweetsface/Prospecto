<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prospecto;

class ProspectoController extends Controller
{
    public function index()
    {
        $prospecto = new Prospecto();
        return  $prospecto->ProspectoEstado(Auth()->user()->id);
    }

    public function show($id)
    {
        $prospecto = new Prospecto();
        return  $prospecto->BuscarProspecto($id);
      
    }

    public function store(Request $request)
    { 
        $file1=$request->file('ine');
        $file2=$request->file('acta_nacimiento');
        $file3=$request->file('comprobante_pago');
        $ine=date_format(now(),"His")."_ine".$file1->getClientOriginalName();
        $acta_nacimiento=date_format(now(),"His")."_acta".$file2->getClientOriginalName();
        $comprobante_pago=date_format(now(),"His")."_comprobante".$file3->getClientOriginalName();
        $file1->move('storage',$ine);
        $file2->move('storage',$acta_nacimiento);
        $file3->move('storage',$comprobante_pago);
       $prospecto = Prospecto::CrearProspecto($request,$ine,$acta_nacimiento,$comprobante_pago,Auth()->user()->id);
       return $prospecto;
    }

    public function update(Request $request,$id)
    {
       $prospecto = Prospecto::ActualizarEstatus($request->all(),$id);
       return $prospecto;
    }
}
