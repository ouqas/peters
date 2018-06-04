<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Qualite  extends Model {

    protected $table = 'qualite';
    protected $fillable = ['titre','photo','shorttext', 'details'];
    protected $hidden = ['created_at', 'updated_at'];


/*
    public function rubrique() {
        return $this->belongsTo(Rubrique::class,"id_rubrique");
    }*/

}
