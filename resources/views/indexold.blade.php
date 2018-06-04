 <!doctype html>
<html lang="{{ app()->getLocale() }}">
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peter Drives you everywhere</title>
    <meta name="description" content="Free Bootstrap Theme by petertakesyoueverywhere.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Pinyon+Script" rel="stylesheet">


    <link rel="stylesheet"  href="{{ URL::asset('css/styles-merged.css')}}">



    <link rel="stylesheet"  href="{{ URL::asset('css/style.min.css')}}">
    <link rel="stylesheet"  href="{{ URL::asset('css/jquery.datetimepicker.css')}}">
  <!-- start internationalisation-->
<script src="http://www.marghoobsuleman.com/misc/jquery.js"></script>
<!-- <msdropdown> -->

 <link rel="stylesheet"  href="{{ URL::asset('css/msdropdown/dd.css')}}">

<!-- </msdropdown> -->

 <link rel="stylesheet"  href="{{ URL::asset('css/msdropdown/flags.css')}}">

<!-- End  internationalisation-->
<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCzLPEQmf4vep7VEkO0qu6stHE6zsK8n8U"></script>
<!--<script src="https://maps.google.com/maps/api/js"></script> -->
<script type="text/javascript">

// Regular map
function regular_map() {
    var var_location = new google.maps.LatLng(31.6294723, -7.981084499999952);

    var var_mapoptions = {
        center: var_location,
        zoom: 14
    };

    var var_map = new google.maps.Map(document.getElementById("map-container"),
        var_mapoptions);

    var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title: "New York"
    });
}

// Initialize maps
google.maps.event.addDomListener(window, 'load', regular_map);




</script>
    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->








  </head>
  <body>
<?php echo $qualities[0]->titre ;?>
<!--modal start-->
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg" style="height: 600px;">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">modal-title</h4>
        </div>
        <div class="modal-body">
<div class="container">
  <div class="row">
    <div class="col-md-4 col-sm-4 probootstrap-animate fadeInUp probootstrap-animated" style="background-image: url('img/img_square_1.jpg'); height: 370px" class="overlay">

    </div>
    <div class="col-md-5 text-center probootstrap-animate " id="modaltext">
    	<br>
    	<br>
    	<br>
    	<br>
   <p class="">////</p>
    </div>

  </div>
</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <!--modal end-->



    <!-- Fixed navbar -->

    <nav class="navbar navbar-default navbar-fixed-top probootstrap-navbar">
      <div class="container">
        <div class="navbar-header" style="
    height: 60px;
">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="border: 1.25px solid #EAB847;border-radius: 25px;height: 53.5px;width: 145.5px;href=;top: 7px;" href="index.html" title="petertakesyoueverywhere">petertakesyoueverywhere</a>
        </div>

        <div id="navbar-collapse" class="navbar-collapse collapse">

          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#" data-nav-section="welcome">Welcome</a></li>
            <li><a href="#" data-nav-section="specialties">Our Qualities</a></li>
            <li><a href="#" data-nav-section="menu">Day Trips</a></li>
            <li><a href="#" data-nav-section="reservation">Reservation</a></li>
            <li><a href="#" data-nav-section="events">TRIPS AND TOURS</a></li>
            <li><a href="#" data-nav-section="contact">Guestbook</a></li>
            <li>
              <a href="#" ><select name="countries" id="countries" style="width:130px;">
              <option value='gb' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag gb" data-title="Great Britain (UK)">En</option>
              <option value='de' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag de" data-title="Germany">De</option>
              <option value='fr' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag fr" data-title="France">Fr</option>
              <option value='sa' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag sa" data-title="Saudi Arabia">Ar</option>
              <option value='an' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag an" data-title="Netherlands Antilles">Nl</option>
              <option value='es' data-image="images/msdropdown/icons/blank.gif" data-imagecss="flag es" data-title="Spain">Es</option>


              </select> </a></li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="flexslider" data-section="welcome">
      <ul class="slides">
        <li style="background-image: url('img/hero_bg_1.jpg')"   class="overlay" data-stellar-background-ratio="0.5">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Welcome to</h1>
                  <h3 class="secondary-heading">Peter driving servce</h3>
                  <p class="sub-heading"> <br>
                  <a href="https://petertakesyoueverywhere.com">
                  Our mission is to offer you a safe, fast and comfortable trip .</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
        <li style="background-image: url('img/hero_bg_2.jpg')" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Ride</h1>
                  <h3 class="secondary-heading">With Us</h3>
                  <p class="sub-heading"><br>
                  <a href="https://petertakesyoueverywhere.com">
                  Our luxury cars with qualified drivers cars with qualified drivers</a></p>
                </div>
              </div>
            </div>
          </div>

        </li>
        <li style="background-image: url('img/hero_bg_3.jpg')" class="overlay">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="probootstrap-slider-text text-center probootstrap-animate probootstrap-heading">
                  <h1 class="primary-heading">Enjoy</h1>
                  <h3 class="secondary-heading">With Us</h3>
                  <p class="sub-heading"> <br><a href="https://petertakesyoueverywhere.com">
                  Let us take you to any place you like to see in Morocco.</a></p>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
    </section>

    <section class="probootstrap-section probootstrap-bg-white" style="padding-bottom: 0px;">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
             <!-- <h1 class="primary-heading">Peter </h1>
              <h3 class="secondary-heading">Takes you everywhere</h3>-->
              <p style="height: 0px;"><a href="#" class="probootstrap-custom-link secondary-heading">About Us</a></p>
              <span class="seperator" style="color: #EAB847">* * * * *</span>
            </div>
            <p>petertakesyoueverywhere.com Services provides you  hight quality of driving service due to its experienced driver. We organize day trips to many interesting places in Morocco. We can also take you to a city and pick you up a few days later. But we can also take you to interesting museums and places in Marrakesh .

            Since many years we have spend many holidays in Morocco and in 2017 we have decided to go live in Marocco. After my retirement I still wanted to do the things I like to do, like driving and history telling. That we now combine in Peterbringsyoueverywhere.com. Prior to my medicine studies I was a tour guide in Europe and today I’m your private driver in Morocco.

            </p>

          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <p><img src="img/img_1.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com" class="img-responsive"></p>
          </div>
        </div>
        <!-- END row -->
      </div>
    </section>
    <section class="probootstrap-section-bg overlay" style="background-image: url(img/hero_bg_2.jpg);" data-stellar-background-ratio="0.5" data-section="specialties">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Discover</h2>
              <h3 class="secondary-heading">Our Specialties</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- probootstrap-bg-white -->
        <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="probootstrap-cell-retro">
            <div class="half">

              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url(img/img_square_1.jpg);"></div>
                <div class="text text-center">
                  <h3>driver languages</h3>
                  <p class="shortext">I am speaking English,German and Dutch,so we have to communicate in one of these languages.Of course I also speak a some French because I live in Marrakesh ,a city where everybody speaks Arabic an French ,but I prefer to speak one of the other languages. Why speaks everybody here French? A big part of Marocco was for more than 40 years a French Protectorate, from 1912 till 1956.</p>
                  <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
                </div>
              </div>
              <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url(img/img_square_2.jpg);"></div>
                <div class="text text-center">
                  <h3>SAFETY</h3>
                  <p class="shortext">Our company Peter's Trips is known by his great and secure drivers. What you rent is in fact a driver with a car.Your driver can bring you everywhere in Morocco and knows the chaotic traffic very well. This is a limousine style of traveling that can drive you around safely up to three adults. In order to forfill your wishes please fill in the form on our website.Your driver knows a lot of beautiful small towns and points of interest. Don’t hesitate to ask him.</p>
                  <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
                </div>
              </div>
              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url(img/img_square_3.jpg);"></div>
                <div class="text text-center">
                  <h3>FASTINESS</h3>
                  <p class="shortext">With our limousine, a brand new Jeep Grand Cherokee 3 liter Diesel 4X4, I would like to drive you in and around Marrakesh.
					This kind of cars is very popular in Morocco because of his wide range of driving possibilities.It is not for nothing that Jeeps are mostly used for safari and mountain tours. And that's what you need off-road or in the mountains.</p>
                  <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
                </div>
              </div>

            </div>
            <div class="half">

              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url(img/img_square_4.jpg);"></div>
                <div class="text text-center">
                  <h3>LUXURY & COMFORT</h3>
                  <p class="shortext">Your driver can bring you everywhere in Morocco and knows the chaotic traffic very well.
                  If you are arriving at Marrakesh Menara Airports don’t forget to contact us and we will drive you safely to your hotel. For a real stress free Airport service we also can arrange a fast-track service. A service you can easily adjust to and makes sure you’re out of the airport within 15 minutes or less. This all to additional costs.</p>
                  <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
                </div>
              </div>
              <div class="probootstrap-cell reverse probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url(img/img_square_5.jpg);"></div>
                <div class="text text-center">
                  <h3>HIGH QUALITY SERVICE</h3>
                  <p class="shortext">The difference between us and other local taxi or limo services is that we want you to be happy and that you enjoy it all in the luxury of a strong and elegant car.We can also arrange a guided tour in the Medina by a certified guide who has a good command of the English language.</p>
                  <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
                </div>
              </div>
              <div class="probootstrap-cell probootstrap-animate" data-animate-effect="fadeIn">
                <div class="image" style="background-image: url(img/img_square_6.jpg);"></div>
                <div class="text text-center">
                  <h3>REASONABLE PRICES</h3>
                  <p class="shortext">A service with a smile with fixed reasonable prices. (Keep in mind that many competitors do not give an all-in price. In retrospect, there are a number of costs, such as the cost of the fuel, the costs of the driver and tax. Sometimes the price is then two to four times as high as the original price).Let us take you to any place you like to see in Morocco.And ..... We keep to the agreed time and the agreed price!</p>
                  <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url('img/night-driving-tips-hero.jpg');"  data-stellar-background-ratio="0.5"  data-section="menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Day / Weekend</h2>
              <h3 class="secondary-heading">Trips</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <ul class="menus">
              <li>
                <figure class="image"><img src="img/img1.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 55</span>
                  <h3>Casablanca</h3>
                  <p>Marrakesh -Casablanca</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="img/img3.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 40</span>
                  <h3>Oualidia</h3>
                  <p>Marrakesh -Oualidia</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="img/img6.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 20</span>
                  <h3>Ourika</h3>
                  <p>Marrakesh -Ourika</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="img/img7.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 30</span>
                  <h3>Oukaïmeden</h3>
                  <p>Marrakesh -Oukaïmeden</p>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <ul class="menus">
              <li>
                <figure class="image"><img src="img/img2.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 20</span>
                  <h3>Marrakech</h3>
                  <p>Menara Airport to Hotel in Marrakesh</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="img/img4.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 55</span>
                  <h3>Agadir</h3>
                  <p>Marrakesh -Agadir</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="img/img5.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 110</span>
                  <h3>Fes</h3>
                  <p>Marrakesh -Fes</p>
                </div>
              </li>
              <li>
                <figure class="image"><img src="img/img8.jpg" alt="Free Bootstrap Template by petertakesyoueverywhere.com"></figure>
                <div class="text">
                  <span class="price">€ 55</span>
                  <h3>Essaouira</h3>
                  <p>Marrakesh -Essaouira</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url('img/hero_bg_5.jpg');"  data-stellar-background-ratio="0.5" data-section="reservation">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">Booking</h2>
              <h3 class="secondary-heading">Rent a car with driver</h3>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section probootstrap-bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12 probootstrap-animate">
            <form  class="probootstrap-form">
 <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="name">Name*</label>
                    <div class="form-field">
                      <i class="icon icon-user2"></i>
                      <input type="text" id="name" class="form-control" placeholder="Your full name">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">Flight-number</label>
                    <div class="form-field">
                      <i class="icon icon-edit"></i>
                      <input type="text" id="flight" class="form-control" placeholder="Your Flight number">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="people">How Many People*</label>
                    <div class="form-field">
                      <i class="icon icon-chevron-down"></i>
                      <select name="people" id="people" class="form-control">
                        <option value="1">1 people</option>
                        <option value="2">2 people</option>
                        <option value="3">3 people</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="email">Email*</label>
                    <div class="form-field">
                      <i class="icon icon-mail"></i>
                      <input type="text" id="email" class="form-control" placeholder="Your email address">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="people">Pick Up Address*</label>
                    <div class="form-field">
                      <i class="icon icon-road"></i>
                      <input type="text" id="adrress" class="form-control" placeholder="Your pickup address">
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="date">Date*</label>
                    <div class="form-field">
                      <i class="icon icon-calendar"></i>
                      <input type="text" id="date-picker" class="form-control">
                    </div>
                  </div>
                </div>

              </div>
              <!-- END row -->
              <div class="row">
              <div class="col-md-4">
                  <div class="form-group">
                    <label for="phone">Phone*</label>
                    <div class="form-field">
                      <i class="icon icon-phone"></i>
                      <input type="text" id="phone" class="form-control" placeholder="Your phone">
                    </div>
                  </div>
                </div>
                <input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}">
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="people">Destination Address</label>
                    <div class="form-field">
                      <i class="icon icon-chevron-down"></i>
                     <i class="icon icon-road"></i>
                      <input type="text" id="destAdress" class="form-control" placeholder="Your Destionation Address">
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label for="date">Guided Tour </label>
                    <div class="form-field">
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <div class="input-group-text">
      <input type="checkbox" id="guide" aria-label="Checkbox for following text input">
    </div>
  </div>
</div>
                    </div>
                  </div>
                </div>
                <div class="col-md-2 ">
                  <div class="form-group">
                    <label for="time">Origine Contry</label>
                    <div class="form-field">
                      <i class="icon icon-flag"></i>
                      <input type="text" id="country" class="form-control" placeholder="country">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
              <div class="col-md-3"></div>
<div class="col-md-8 ">
                  <div class="form-group col-lg-9">
                    <label for="time">Message</label>
                    <div class="form-field">
                        <div class="form-group">

    <textarea class="form-control" id="message" rows="3" placeholder="Your message here"></textarea>
  </div>
                    </div>
                  </div>
                </div>



              </div>
              <div class="row">
                <div class="col-md-4 col-md-offset-4">
                  <input type="button" name="submit" id="submit" value="Submit" class="btn btn-lg btn-primary btn-block">
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-section-bg overlay" style="background-image: url('img/tour.jpg');"  data-stellar-background-ratio="0.5" data-section="events">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center probootstrap-animate">
            <div class="probootstrap-heading">
              <h2 class="primary-heading">MOROCCO</h2>
              <h3 class="secondary-heading">TRIPS & TOURS</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
   <section class="probootstrap-section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
                <figure ><img  src="img/day1.jpg"  alt="" ></figure>
              <div class="text">
                <span class="date">01. April 2018</span>
                <h3><a href="#">Day-tour to Oulidia</a></h3>
                <p>Today I add a day-tour to my website. A day tour Tou Oualidia. This is a beautiful and quiet little town 200 km from Marrakesh at the Westcoast of Morocco. There is also a fantastic restaurant to eat oysters. Very fresh oysters.</p>
                <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
               <figure><img src="img/day2.jpg" alt="Free Bootstrap Template by uicookies.com"></figure>

              <div class="text">
                <span class="date">20. March 2018</span>
                <h3><a href="#">Lunch at Royal Mansour</a></h3>
                <p>Yesterday we had a fantastic lunch at Restaurant La Table from Hotel Royal Mansour.</p>
                <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 probootstrap-animate">
            <div class="probootstrap-block-image">
              <figure><img src="img/day3.jpg" alt=""></figure>
              <div class="text">
                <span class="date"> 16. March 2018</span>
                <h3><a href="#">Fès trip</a></h3>
                <p>Today I already wrote something about Fés as the start of next week's trip to Fés.</p>
                <p><button type="button" style="border-width: 0px;background-color:#FFFFFF" data-toggle="modal" data-target="#myModal"><a href="#" class="probootstrap-custom-link link-sm readmore">Read More</a></button></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--   <div id="map-container" class="z-depth-1" style="height: 270px"></div>-->
        <section class="probootstrap-section probootstrap-bg-white" data-section="contact">
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center probootstrap-animate">
            <div class="probootstrap-heading dark">
              <h1 class="primary-heading">Contact</h1>
              <h3 class="secondary-heading">Let's Chat</h3>
            </div>
            <div id="map-container" class="z-depth-1" style="height: 270px"></div>
          </div>
          <div class="col-md-6 col-md-push-1 probootstrap-animate">
            <form method="post" class="probootstrap-form">
              <div class="form-group">
                <label for="c_name">Your Name</label>
                <div class="form-field">
                  <input type="text" id="c_name" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="c_email">Your Email</label>
                <div class="form-field">
                  <input type="text" id="c_email" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label for="c_message">Your Message</label>
                <div class="form-field">
                  <textarea name="c_message" id="c_message" cols="30" rows="10" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group">
                <input type="submit" name="c_submit" id="c_submit" value="Send Message" class="btn btn-primary btn-lg">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="probootstrap-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-5 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>Contact</h3>
              <div class="row">
                <div class="col-md-8">
                  <p> Email: info@peterbringsyoueverywhere.com <br> Website: www.peterbringsyoueverywhere.com <br>Tel.: (+212)612517785</p>
                </div>
                <div class="col-md-6">
                  <p> </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-5 probootstrap-animate">
            <div class="probootstrap-footer-widget">
              <h3>MENU</h3>
              <div class="row">
                <div class="col-md-4">
<div >
          <ul class=" navbar-nav navbar-right">
            <li class="active"><a href="#" >Welcome</a></li>
            <li><a href="#" data-nav-section="specialties">Our Qualities</a></li>
            <li><a href="#" data-nav-section="menu">Day Trips</a></li>
            <li><a href="#" data-nav-section="reservation">Reservation</a></li>
            <li><a href="#" data-nav-section="events">TRIPS & TOURS</a></li>
            <li><a href="#" data-nav-section="contact">Guestbook</a></li>
          </ul>
</div>

                </div>
                <div class="col-md-4">
                  <p></p>
                </div>
                <div class="col-md-4">
                  <p></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="probootstrap-copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="copyright-text">&copy; 2018 <a href="http://petertakesyoueverywhere.com">Peter private driving service</a>. All Rights Reserved.</p>
          </div>
          <div class="col-md-4">
            <ul class="probootstrap-footer-social right">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook"></i></a></li>
              <li><a href="#"><i class="icon-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

<!-- The actual snackbar -->
<div id="snackbar">Some text some message..</div>


    <script src="{{ asset('js/jquery.js')}}"></script>

    <script src="{{ asset('js/scripts.min.js')}}"></script>

     <script src="{{ asset('js/msdropdown/jquery.dd.min.js')}}"></script>

    <script src="{{ asset('js/custom.min.js')}}"></script>

     <script src="{{ asset('js/script.js')}}"></script>


     <script src="{{ asset('js/jquery.datetimepicker.full.js')}}"></script>


    <script>
            /*jslint browser:true*/
            /*global jQuery, document*/

            jQuery(document).ready(function () {
                'use strict';

                jQuery('#date-picker').datetimepicker();



            });
        </script>
<script>
$(document).ready(function() {
	$("#countries").msDropdown();
})
</script>
  </body>
  </html>
