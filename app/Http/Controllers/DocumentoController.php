<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentoController extends Controller
{
    public function store()
    {
    if($request->ine  && $request->acta_nacimiento && $request->comprobante_pago){
            $documento->id_pro_doc=$prospecto->id_prospecto;
            $file1=$request->file('ine');
            $file2=$request->file('acta_nacimiento');
            $file3=$request->file('comprobante_pago');
            $ine=date_format(now(),"His")."_ine".$file1->getClientOriginalName();
            $acta_nacimiento=date_format(now(),"His")."_acta".$file2->getClientOriginalName();
            $comprobante_pago=date_format(now(),"His")."_comprobante".$file3->getClientOriginalName();
            $file1->move('storage',$ine);
            $file2->move('storage',$acta_nacimiento);
            $file3->move('storage',$comprobante_pago);
            $documento->ine=$ine;
            $documento->acta_nacimiento=$acta_nacimiento;
            $documento->comprobante_pago=$comprobante_pago;
            $documento->save();
        DB::beginTransaction();
        }
       
    }
}

 /*   try {
        $payment = Payment::find($id_payment);
        $payment->id_status = 13;
        $payment->save();
        $card_payment = PaymentCard::find($payment->id_card_payment);
        $card_payment->id_status = 25;
        $card_payment->save();
        DB::commit();
    } catch (\Exception $e) {
        DB::rollback();
        return $e->getMessage();
}*/
