<?php

namespace App\Http\Controllers;

use App\Models\Plesac;
use App\Http\Resources\PlesacResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlesacController extends Controller
{
    public function index()
    {
        $plesaci = Plesac::all();

        //return $plesaci;
        return PlesacResource::collection($plesaci);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'jmbg' => 'required|string|max:13',
            'email' => 'required|email',
            'broj_telefona' => 'required|string',
            'koreograf_id' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska pri validaciji!', $validator->errors()]);
        }

        $plesac = Plesac::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'jmbg' => $request->jmbg,
            'email' => $request->email,
            'broj_telefona' => $request->broj_telefona,
            'koreograf_id' => $request->koreograf_id,
        ]);

        return response()->json(['Plesac je dodat!', new PlesacResource($plesac)]);
    }

    public function show($id)
    {
        $plesac = Plesac::find($id);

        if ($plesac) {
          return new PlesacResource($plesac);
        } else {
            return response()->json('Plesac kog zelite da nadjete ne postoji u bazi podataka!');
        }
    }

    public function edit(Plesac $plesac)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $plesac = Plesac::find($id);

        if (is_null($plesac)) {
            return response()->json('Plesac kog zelite da azurirate ne postoji u bazi podataka!');
        }

        $validator = Validator::make($request->all(), [
            'ime' => 'required|string|max:255',
            'prezime' => 'required|string|max:255',
            'jmbg' => 'required|string|max:13',
            'email' => 'required|email',
            'broj_telefona' => 'required|string',
            'koreograf_id' => 'required|integer',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['Greska pri azuriranju plesaca!', $validator->errors()]);
        }
    
        $plesac->ime = $request->ime;
        $plesac->prezime = $request->prezime;
        $plesac->jmbg = $request->jmbg;
        $plesac->email = $request->email;
        $plesac->broj_telefona = $request->broj_telefona;
        $plesac->koreograf_id = $request->koreograf_id;
    
        $plesac->save();
    
        return response()->json(['Plesac je azuriran!', new PlesacResource($plesac)]);
    
    }

    public function destroy($id)
    {
        $plesac = Plesac::find($id);

        if ($plesac) {
             $plesac->delete();
             return response()->json(['Uspesno ste obrisali plesaca iz baze podataka!', new PlesacResource($plesac)]);
        }
        else {
             return response()->json('Plesac kog zelite da obrisete ne postoji u bazi podataka!');
        }
    }
}
