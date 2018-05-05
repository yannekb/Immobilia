<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adress','surface', 'prix', 'type_contrat', 'type_bien', 'etat'
    ];
}
