<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide  extends Model {

    protected $table = 'slide';
    protected $fillable = ['titre','libele', 'photo'];
    protected $hidden = ['created_at', 'updated_at'];


   

}
