<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Support\Facades\Hash;

class Promotor extends  Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;

    public $table = "promotores";

    protected $fillable = [
        'nombre_promotor','primer_apellido','segundo_apellido', 'email', 'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function CrearPromotor($promotores){
        $promotor =Promotor::create(
            [
               'nombre_promotor' => $promotores['nombre_promotor'],
               'primer_apellido' =>  $promotores['primer_apellido'],
               'segundo_apellido' => $promotores['segundo_apellido'],
               'email'  => $promotores['email'],
               'password' => Hash::make($promotores['password'])
            ]);
            $token = $promotor->createToken('API Token')->accessToken;
            return response([ 'promotor' => $promotor, 'token' => $token]);
    }
}
