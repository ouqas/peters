<?php

namespace App\Repositories;

use App\Models\Reservation;
use Illuminate\Support\Facades\DB;



class ReservationRepository extends BaseRepository {

    public function __construct(Reservation $res) {
        $this->model = $res;
    }

    public function getReservationById($id) {
        return $this->model->find($id);
    }

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
    
    }
    
    public function getAllReservations() {

        
        return $this->model->get();
         
     }
/*
    public function getAllSectionsbyKeyword($key) {

       $attributes = ['nom','code_section']; 
       return $this->model
                        ->where('nom', 'like', '%' . $key . '%')
                        ->get();
        
    }

   
    public function getrubriquesbySection ($id) {
        $rubriques= $this->model->find($id)->rubriques;
        $articles = array();

        
        foreach ($rubriques as $rub)
        {
            array_push($articles, $rub->articles);
        } 
        
      $data['articles'] = $articles;
      $data['rubriques'] = $rubriques ; 
        
        return $data;

    }

    
    public function getSectionsBypages($request) {

        $start = $request["start"];
        $length = $request["length"];
        $page = ($start / $length) + 1;


        Paginator::currentPageResolver(function () use ($page) {
            return $page;
        });
        
    
       $res = $this->model->select('a2t_section.*');
                            

        return $res;
    }*/
    public function destroy($id){
        
        return parent::destroy($id);
    }
}