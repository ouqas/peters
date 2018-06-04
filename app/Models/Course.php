<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course  extends Model {

    protected $table = 'dernier_courses';
    protected $fillable = ['titre','text', 'date', 'details'];
    protected $hidden = ['created_at', 'updated_at'];




}
