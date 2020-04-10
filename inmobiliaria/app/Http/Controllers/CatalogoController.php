<?php

namespace App\Http\Controllers;
use app\Providers;
use Illuminate\Http\Request;
use App\aviso;
use App\Categoria;
use Illuminate\Support\Facades\Storage;

class CatalogoController extends Controller
{
  public function index()
  {
      $avisosVenta=aviso::where('id_categoria', '1')
      ->join('categorias','id_categoria', '=', 'categorias.id')
      ->get();

      $avisosAlquiler=aviso::where('id_categoria', '2')
      ->join('categorias','id_categoria', '=', 'categorias.id')
      ->get();

      $avisosTemporario=aviso::where('id_categoria', '3')
      ->join('categorias','id_categoria', '=', 'categorias.id')
      ->get();

      return view('/welcome',compact('avisosTemporario', 'avisosVenta', 'avisosAlquiler'));
  }
}
