<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promotor;

class PromotorController extends Controller
{
    public function store(Request $request)
    {
       $promotor = Promotor::CrearPromotor($request);
       return $promotor;
    }
}
