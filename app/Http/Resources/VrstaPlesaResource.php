<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VrstaPlesaResource extends JsonResource
{
    public static $wrap = 'vrsta_plesa';

    public function toArray(Request $request): array
    {
        return [
            'ID' => $this->resource->id,
            'Naziv' => $this->resource->naziv,
            'Opis' => $this->resource->opis,
            'Zemlja porekla' => $this->resource->zemlja_porekla,
            'Najpoznatija numera' => $this->resource->najpoznatija_numera
        ];
    }
}
