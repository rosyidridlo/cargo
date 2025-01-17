<?php

namespace App\Http\Controllers;

use App\Models\Armada;
use Illuminate\Http\Request;

class ArmadaController extends Controller
{
    public function index()
     {
          $armadas = Armada::all();
          return view('armadas.index', compact(['armadas']));
     }

     public function create()
     {
          return view('armadas.create');
     }

     public function store(Request $request)
     {

          $request->validate([
               'name' => 'required|min:5',
               'max_weight' => 'required|numeric',
               'length' => 'required|numeric',
               'width' => 'required|numeric',
               'height' => 'required|numeric'
          ]);
          Armada::create([
               'name' => $request->name,
               'max_weight' => $request->max_weight,
               'length' => $request->length,
               'width' => $request->width,
               'height' => $request->height
          ]);

          return redirect('/armadas')->with('success', 'Data Armada berhasil ditambahkan');
     }

     public function edit($id)
     {
          $armadas = Armada::find($id);
          return view('armadas.edit', compact(['armadas']));
     }

     public function update(Request $request, $id)
     {
          $request->validate([
               'name' => 'required|min:5',
               'max_weight' => 'required|numeric',
               'length' => 'required|numeric',
               'width' => 'required|numeric',
               'height' => 'required|numeric'
          ]);

          $armada = Armada::find($id);
          $armada->update([
               'name' => $request->name,
               'max_weight' => $request->max_weight,
               'length' => $request->length,
               'width' => $request->width,
               'height' => $request->height
          ]);
          return redirect('/armadas')->with('success', 'Data Armada berhasil diubah');
     }

     public function destroy($id)
     {
          $armada = Armada::find($id);
          $armada->delete();

          return redirect('/armadas')->with('success', 'Data Armada berhasil dihapus');
     }
}
