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

      //Mail::to('fernandezgisela27@gmail.com')->send(new MensajeContacto($dataContacto));

      //Mail::to('fernandezgisela27@gmail.com')->send(new MensajeContacto($mensaje));
      // return new MensajeContacto($validacion);

      //require 'vendor/autoload.php';
      // If you're using Composer (recommended)
      // Comment out the above line if not using Composer
      // require("<PATH TO>/sendgrid-php.php");
      // If not using Composer, uncomment the above line and
      // download sendgrid-php.zip from the latest release here,
      // replacing <PATH TO> with the path to the sendgrid-php.php file,
      // which is included in the download:
      // https://github.com/sendgrid/sendgrid-php/releases

      //$email = new \SendGrid\Mail\Mail();
      //$email->setFrom("test@example.com", "Example User");
      //$email->setSubject("Sending with SendGrid is Fun");
      //$email->addTo("test@example.com", "Example User");
      //$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
      //$email->addContent(
      //  "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
      //);
      //$sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
      //try {
        //$response = $sendgrid->send($email);
        //print $response->statusCode() . "\n";
        //print_r($response->headers());
        //print $response->body() . "\n";
      //} catch (Exception $e) {
        //echo 'Caught exception: '. $e->getMessage() ."\n";
      //}
      return response()->json(['success'=>'Mensaje enviado'], 200);
    }
}
