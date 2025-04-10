<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teszt extends Model
{
    protected $fillable = [
        'id',
        'kerdes',
        'v1',
        'v2',
        'v3',
        'v4',
        //'helyes',
        'kategoriaId',
    ];

    public function kategoria(){
        return $this->belongsTo(kategoria::class, 'kategoriaId');
    }


}
