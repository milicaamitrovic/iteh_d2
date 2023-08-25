<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koreogaf;

class PlesnaSkola extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'adresa',
        'grad',
        'email',
        'website',
        'broj_telefona'
    ];

    public function koreografi()
    {
        return $this->hasMany(Koreograf::class);
    }
}
