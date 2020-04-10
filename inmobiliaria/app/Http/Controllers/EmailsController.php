<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeContacto;

class EmailsController extends Controller
{
    public function store(Request $request){

      $validacion = [
          'nombre' => 'required|string|max:200',
          'email' => 'required|email',
          'asunto' => 'required',
          'mensaje' => 'required|min:3'
      ];

      $error = [
          "required" => 'El campo :attribute es requerido',
          "string" => 'El campo :attribute debe ser un texto',
          "max" => 'El campo :attribute no debe superar los :max caracteres',
          "min" => 'El campo :attribute no debe ser menor a :min caracteres'
      ];

      $this->validate($request, $validacion, $error);

      Mail::to('morellinoriega@gmail.com')->send(new MensajeContacto($mensaje));

      return "Mensaje enviado";
    }
}
