<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koreogaf;

class Plesac extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'email',
        'broj_telefona',
        'koreograf_id'
    ];

    public function koreograf()
    {
        return $this->belongsTo(Koreogaf::class);
    }
}
