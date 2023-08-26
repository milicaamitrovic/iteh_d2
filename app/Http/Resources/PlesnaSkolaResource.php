<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PlesnaSkolaResource extends JsonResource
{
    public static $wrap = 'plesna_skola';

    public function toArray(Request $request): array
    {
        return [
            'ID' => $this->resource->id,
            'Naziv' => $this->resource->naziv,
            'Adresa' => $this->resource->adresa,
            'Email adresa' => $this->resource->email,
            'Website' => $this->resource->website,
            'Broj telefona' => $this->resource->broj_telefona,
        ];
    }
}
