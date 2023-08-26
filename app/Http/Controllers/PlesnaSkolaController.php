<?php

namespace App\Http\Controllers;

use App\Models\PlesnaSkola;
use App\Http\Resources\PlesnaSkolaResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PlesnaSkolaController extends Controller
{
    public function index()
    {
        $plesneskole = PlesnaSkola::all();
        
        //return $plesneskole;
        return PlesnaSkolaResource::collection($plesneskole);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'naziv'=>'required|string|max:255',
            'adresa' => 'required|string|max:100',
            'email' => 'required|email',
            'website' => 'required|string',
            'broj_telefona' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greska pri validaciji!', $validator->errors()]);
        }

        $plesnaskola = PlesnaSkola::create([
            'naziv' => $request->naziv,
            'adresa' => $request->adresa,
            'email' => $request->email,
            'website' => $request->website,
            'broj_telefona' => $request->broj_telefona,
         ]);

        return response()->json(['Plesna skola je dodata!', new PlesnaSkolaResource($plesnaskola)]);
    }

    public function show($id)
    {
        $plesnaskola = PlesnaSkola::find($id);

        if ($plesnaskola) {
            return new PlesnaSkolaResource($plesnaskola);
          } else {
              return response()->json('Plesna skola koju zelite da nadjete ne postoji u bazi podataka!');
          }
    }

    public function edit(PlesnaSkola $plesnaSkola)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $plesnaskola = PlesnaSkola::find($id);

        if (is_null($plesnaskola)) {
            return response()->json('Plesna skola koju zelite da azurirate ne postoji u bazi podataka!');
        }

        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'adresa' => 'required|string',
            'email' => 'required|email',
            'website' => 'required|string',
            'broj_telefona' => 'required|string',
        ]);
    
        if ($validator->fails()) {
            return response()->json(['Greska pri azuriranju plesne skole!', $validator->errors()]);
        }
    
        $plesnaskola->naziv = $request->naziv;
        $plesnaskola->adresa = $request->adresa;
        $plesnaskola->email = $request->email;
        $plesnaskola->website = $request->website;
        $plesnaskola->broj_telefona = $request->broj_telefona;
    
        $plesnaskola->save();
    
        return response()->json(['Plesna skola je azurirana!', new PlesnaSkolaResource($plesnaskola)]);
    
    }

    public function destroy($id)
    {
        $plesnaskola = PlesnaSkola::find($id);

        if ($plesnaskola) {
             $plesnaskola->delete();
             return response()->json(['Uspesno ste obrisali plesnu skolu iz baze podataka!', new PlesnaSkolaResource($plesnaskola)]);
        }
        else {
             return response()->json('Plesna skola koju zelite da obrisete ne postoji u bazi podataka!');
        }
    }
}
