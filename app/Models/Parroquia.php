<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    use HasFactory;

    protected $fillable = [
        'aperturado',
        'parte8',
        'parte9',
        'parte10',
        'parte11',
        'parte12',
        'parte1',
        'parte2',
        'parte3',
        'parte4',
        'parte5',
        'parte6',
        'parte7',
        'cerrado',
        'final',
        'meta',
        'cumplido',
        'centros',
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function lsb()
    {
        return $this->hasMany(Luchador::class);
    }
    public function nbc()
    {
        return $this->hasMany(NBC::class);
    }
}
