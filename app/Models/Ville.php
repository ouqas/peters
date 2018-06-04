<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville  extends Model {

    protected $table = 'ville';
    protected $fillable = ['nom_ville','photo', 'details'];
    protected $hidden = ['created_at', 'updated_at'];

/*
    public function rubrique() {
        return $this->belongsTo(Rubrique::class,"id_rubrique");
    }*/

}
