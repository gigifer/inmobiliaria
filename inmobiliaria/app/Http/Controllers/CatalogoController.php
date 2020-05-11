<?php

namespace App\Http\Controllers;
use app\Providers;
use Illuminate\Http\Request;
use App\aviso;
use App\Categoria;
use App\Foto;
use Illuminate\Support\Facades\Storage;

class CatalogoController extends Controller
{
  public function index()
  {
    $avisosAlquiler=aviso::where('id_categoria', '2')->get();
    return view('/welcome',compact('avisosAlquiler'));
  }

  public function venta(){
    $avisosVenta = aviso::where('id_categoria', '1')->get();
    return view('/venta', compact('avisosVenta'));
  }

  public function temporario(){
    $avisosTemporario=aviso::where('id_categoria', '3')->get();
    return view('/temporario', compact('avisosTemporario'));
  }
  
  public function show($id)
  {
    $aviso = aviso::where('id', strval($id))->first();
    $fotoCarrusel = $aviso->foto;
    return view('detalleAviso',compact('aviso', 'fotoCarrusel'));
  }
}
