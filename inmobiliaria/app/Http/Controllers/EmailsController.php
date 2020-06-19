<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajeContacto;

class EmailsController extends Controller
{
    public function recieveData(Request $request){
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

      $email = new \SendGrid\Mail\Mail();
      $email->setFrom("morellinoriega@gmail.com", "Morelli Noriega Inmobiliaria");
      $email->setSubject("Nuevo mensaje en el sitio web: ");
      $email->addTo("morellinoriega@gmail.com", "Barbara");
      $email->addContent("text/plain", "De: ". $request['nombre'] . '\n' . $request['mensaje']);
      $email->addContent("text/html", "<html><body><p><strong>De:</strong> " . $request['nombre'] . "</p>
      <p><strong>Asunto:</strong> " . $request['asunto'] . "</p>
      <p><strong>Email:</strong> " . $request['email'] . "</p>
      <p> " . $request['mensaje'] . " </p></body></html>");

      $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));

      try {
          $response = $sendgrid->send($email);
          return response()->json(['success'=>'Mensaje enviado'], 200);
      } catch (Exception $e) {
          return response()->json(['error'=>'El mensaje no pudo ser enviado'], 500);
      }

    }
}
