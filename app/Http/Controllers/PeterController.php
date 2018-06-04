<?php

namespace App\Http\Controllers;
use Mail;

use Illuminate\Http\Request;

use App\Repositories\ReservationRepository;
use App\Repositories\QualiteRepository;
use App\Repositories\DerCourseRepository;


class PeterController extends Controller
{

	 protected $reservationrepository;
	 protected $qualiterepository ;
 	 protected $dercourserepository ;


  	public function __construct(ReservationRepository $ress ,QualiteRepository $qua ,DerCourseRepository $dcrs) {
        $this->reservationrepository = $ress ;
				$this->qualiterepository = $qua ;
				$this->dercourserepository = $dcrs ;
    }

	public function index() {
			$qualities = $this->qualiterepository->getAllQualities();
			$dcourses = $this->dercourserepository->getAllCourses();
        return \View::make('index')->with(array('qualities'=>$qualities , 'dcourses' => $dcourses));
    }
	
	public function admin() {
			
        return \View::make('admin.index');
    }
    public function bookReservation (Request $request) {
		//die('here');
    		$reservation =   $this->reservationrepository->store($request);


				$data = array('reservation'=> $reservation);


			Mail::send('emails.confirmation', $data, function($message) {

				$message->to('sara.aitbaydi1@gmail.com', 'Artisans Web')

						->subject('Reservation Confirmation ');

				$message->from('petertakesyoueverywhere@gmail.com','Peter');

			});




        return  $reservation;
    }


		public function sendMessage (Request $request) {
		//die('here');

		$data = array('name'=> $request["name"] ,'themessage'=> $request["message"] , 'email'=> $request["email"] );

			Mail::send('emails.message', $data, function($message) {

				$message->to('mohamed.ouqas@gmail.com', 'Artisans Web')

						->subject('Message from Customer');

				$message->from('petertakesyoueverywhere@gmail.com','Peter');

			});




        return  $data;
    }
}
