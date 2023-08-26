<?php

namespace App\Http\Controllers;

use App\Models\Koreograf;
use App\Http\Resources\KoreografResource;
use Illuminate\Http\Request;

class VrstaPlesaKoreografController extends Controller
{
    public function index($vrsta_plesa_id)
    {
        $koreografi = Koreograf::get()->where('vrsta_plesa_id', $vrsta_plesa_id);

        if($koreografi->isEmpty())
        {
            return response()->json('Ne postoji nijedan koreograf za vrstu plesa trazenog id-a!');
        } else {
            return KoreografResource::collection($koreografi);
        }
    }
}
