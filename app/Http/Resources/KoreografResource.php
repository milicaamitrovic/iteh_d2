<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KoreografResource extends JsonResource
{
    public static $wrap = 'koreograf';

    public function toArray(Request $request): array
    {
        return [
            'ID ' => $this->resource->id,
            'Ime ' => $this->resource->ime,
            'Prezime ' => $this->resource->prezime,
            'JMBG ' => $this->resource->jmbg,
            'Email adresa ' => $this->resource->email,
            'Godine iskustva ' => $this->resource->godine_iskustva,
            'Vrsta plesa ' => new VrstaPlesaResource($this->resource->vrstaPlesa),
            'Plesna skola ' => new PlesnaSkolaResource($this->resource->plesnaSkola),
        ];
    }
}
