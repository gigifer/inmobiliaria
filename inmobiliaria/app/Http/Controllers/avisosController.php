<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Categoria;
use App\aviso;
use\App\Foto;
use Illuminate\Http\Request;

class avisosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $avisos = aviso::where('titulo', 'LIKE', "%$keyword%")
                ->orWhere('descripcion', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $fotos = [];
            $avisos = aviso::latest()->paginate($perPage)->all();
        }

        return view('avisos.index', compact('avisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $categorias = Categoria::all();

        return view('avisos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

      $validacion = [
          'titulo' => 'required|string|max:200',
          'descripcion' => 'required|string|max:500',
          'precio' => 'required',
          //'foto' => 'required|max:10000|mimes:jpeg,png,jpg,bmp'
      ];

      $mensaje = [
          "required" => 'El campo :attribute es requerido',
          "string" => 'El campo :attribute debe ser un texto',
          "max" => 'El campo :attribute no debe superar los :max caracteres',
          "mimes" => 'La fotografía debe ser formato jpeg, png, jpg o bmp'
      ];

      $this->validate($request, $validacion, $mensaje);

      $requestData = $request->all();

      $nuevo_aviso = aviso::create($requestData);
      $id_aviso_nuevo = $nuevo_aviso->id;

      $requestData['aviso_id'] = $id_aviso_nuevo;

      if ($request->hasFile('foto')) {
        $files = $request->file('foto');
        foreach ($files as $file) {
          $requestData['ruta'] = $file
          ->store('uploads', 'public');

          Foto::create($requestData);
        }
      }

        return redirect('avisos')->with('flash_message', 'aviso added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $aviso = aviso::findOrFail($id);
        $categorias = Categoria::all();

        return view('avisos.show', compact('aviso', 'categorias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $aviso = aviso::findOrFail($id);
        $categorias = Categoria::all();

        return view('avisos.edit', compact('aviso', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {

        $requestData = $request->all();
                if ($request->hasFile('foto')) {
            $requestData['foto'] = $request->file('foto')
                ->store('uploads', 'public');
        }

        $aviso = aviso::findOrFail($id);
        $categorias = Categoria::all();
        $aviso->update($requestData);

        return redirect('avisos', 'categorias')->with('flash_message', 'aviso updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        aviso::destroy($id);

        return redirect('avisos')->with('flash_message', 'aviso deleted!');
    }
}
