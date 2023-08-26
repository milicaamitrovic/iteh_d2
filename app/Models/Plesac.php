<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koreograf;

class Plesac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'jmbg',
        'email',
        'broj_telefona',
        'koreograf_id'
    ];

    public function koreograf()
    {
        return $this->belongsTo(Koreograf::class);
    }
}
