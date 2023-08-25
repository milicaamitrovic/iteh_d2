<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PlesnaSkola;
use App\Models\VrstaPlesa;
use App\Models\Plesac;

class Koreograf extends Model
{
    use HasFactory;

    protected $fillable = [
        'ime',
        'prezime',
        'jmbg',
        'email',
        'godine',
        'vrsta_plesa_id',
        'plesna_skola_id'
    ];

    public function plesnaSkola()
    {
        return $this->belongsTo(PlesnaSkola::class);
    }

    public function vrstaPlesa()
    {
        return $this->belongsTo(VrstaPlesa::class);
    }

    public function plesaci()
    {
        return $this->hasMany(Plesac::class);
    }
}
