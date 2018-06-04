<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation  extends Model {

    protected $table = 'reservation';
    protected $fillable = ['nom','depart','destination', 'email', 'telephone',  'datede', 'origin_country',  'accompagnement','vol_num','commentaire','pass_num'];
    protected $hidden = ['created_at', 'updated_at'];




}
