<?php

namespace App\Repositories;

use App\Models\Course;
use Illuminate\Support\Facades\DB;



class DerCourseRepository extends BaseRepository {

    public function __construct(Course $res) {
        $this->model = $res;
    }

    public function getCourseById($id) {
        return $this->model->find($id);
    }
/*
    public function store($inputs) {
		//var_dump($inputs);
		$guide =0 ;
		if ($inputs['guide'] == "true" )
			$guide = 1 ;

       $res = new Reservation();
        $res->nom = $inputs['name'];
        $res->vol_num = $inputs['flight'];
        $res->pass_num = $inputs['people'];
        $res->email = $inputs['email'];
        $res->depart = $inputs['addres'];
        $res->datede = $inputs['date'];
        $res->telephone = $inputs['phone'];
        $res->destination = $inputs['destadress'];
        $res->accompagnement = $guide;
        $res->origin_country = $inputs['country'];
        $res->commentaire = $inputs['message'];
        $res->save();

        return $res;

    }*/

    public function getAllCourses() {


        return $this->model->get();

     }

    public function destroy($id){

        return parent::destroy($id);
    }
}
