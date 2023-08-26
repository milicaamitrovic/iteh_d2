<?php

namespace App\Http\Controllers;

use App\Models\Koreograf;
use App\Http\Resources\KoreografResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KoreografController extends Controller
{
    public function index()
    {
        $koreografi = Koreograf::all();
        
        //return $koreografi;
        return KoreografResource::collection($koreografi);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        $koreograf = Koreograf::find($id);

        if ($koreograf) {
          return new KoreografResource($koreograf);
        } else {
            return response()->json('Koreograf kog zelite da nadjete ne postoji u bazi podataka!');
        }
    }

    public function edit(Koreograf $koreograf)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $koreograf = Koreograf::find($id);

        if (is_null($koreograf)) {
            return response()->json('Koreograf kog zelite da azurirate ne postoji u bazi podataka!');
        }

        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'jmbg' => 'required|string|max:13',
            'email' => 'required|email',
            'godine_iskustva' => 'required|integer',
            'vrsta_plesa_id' => 'required|integer',
            'plesna_skola_id' => 'required|integer',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['Greska pri azuriranju koreografa!', $validator->errors()]);
        }
    
        $koreograf->ime = $request->ime;
        $koreograf->prezime = $request->prezime;
        $koreograf->jmbg = $request->jmbg;
        $koreograf->email = $request->email;
        $koreograf->godine_iskustva = $request->godine_iskustva;
        $koreograf->vrsta_plesa_id = $request->vrsta_plesa_id;
        $koreograf->plesna_skola_id = $request->plesna_skola_id;
    
        $koreograf->save();
    
        return response()->json(['Koreograf je azuriran!', new KoreografResource($koreograf)]);
    
    }

    public function destroy($id)
    {
        $koreograf = Koreograf::find($id);

        if ($koreograf) {
             $koreograf->delete();
             return response()->json(['Uspesno ste obrisali koreografa iz baze podataka!', new KoreografResource($koreograf)]);
        }
        else {
             return response()->json('Koreograf kog zelite da obrisete ne postoji u bazi podataka!');
        }
    }
}
