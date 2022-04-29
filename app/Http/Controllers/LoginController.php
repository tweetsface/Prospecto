<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Promotor;
use App\Prospecto;
use Response;

class LoginController extends Controller
{
  
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if (!Auth::attempt($data)) {
            return response(['error_message' => 'Incorrect Details. 
            Please try again']);
        }

        $token = auth()->user()->createToken('_token')->accessToken;
        return response(['promotor' => auth()->user(), '_token' => $token]);

    }

    public function destroy()
    {
        Auth::logout();
    }
   



}
