<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlesacResource extends JsonResource
{
    public static $wrap = 'plesac';

    public function toArray(Request $request): array
    {
        return [
            'ID' => $this->resource->id,
            'Ime' => $this->resource->ime,
            'Prezime' => $this->resource->prezime,
            'JMBG' => $this->resource->jmbg,
            'Email adresa' => $this->resource->email,
            'Broj telefona' => $this->resource->broj_telefona,
            'Koreograf' => new KoreografResource($this->resource->koreograf)
      ];
    }
}
