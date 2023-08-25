<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Koreograf;

class VrstaPlesa extends Model
{
    use HasFactory;

    protected $fillable = [
        'naziv',
        'opis',
        'zemlja_porekla',
        'najpoznatija_numera'
    ];

    public function koreografi()
    {
        return $this->hasMany(Koreograf::class);
    }
}
