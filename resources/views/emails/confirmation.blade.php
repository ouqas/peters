
<img src="HeaderPeterMail.png" alt="petertakesyoueverywhere.com" class="center">
<br>
<br>
<br>
<br>
<div style="font-family: Times New Roman, Times, serif ;font-size: 16px;">
Dear  <strong>{{ $reservation->nom }}</strong>, <br><br>


<p >Your reservation has been confirmed and we will contact you shortly by the driver.<br>
If you would like to cancel a reservation, please contact us right away at least 24
hours before your specified pick up time.
<br>
Here are your reservation details: </p><br><br>
<div style="margin-left: 80px">
<strong>Pick Up Address:</strong> {{ $reservation->depart }}<br>
<strong>Date:</strong> {{ $reservation->datede }}<br>
<strong>Phone:</strong>	{{ $reservation->telephone }}<br>
<strong>Email:</strong>	{{ $reservation->email}}<br>
<strong>Destination Address:</strong>	{{ $reservation->destination }}<br>
<strong>How Many People:</strong> {{ $reservation->pass_num }}<br>
<strong>Guided Tour :</strong> yes /no {{ $reservation->accompagnement }}<br>
</div>

<h3 style="color: #ff9900 "><strong>Support</strong></h3>
If you have any questions, please contact us at the following contact details.<br>
Info@peterbringsyoueverywhere.com<br>
+212 612517785<br>
Peter Private Car Driver – Driving Service.<br>
<a href="www.facebook/petertakesyoueverywhere.com">www.facebook/petertakesyoueverywhere.com</a> | <a href="www.instagrame/ petertakesyoueverywhere.com">www.instagrame/ petertakesyoueverywhere.com</a><br>
</div>
<!--<img src="logo.png" alt="petertakesyoueverywhere.com" align="left">-->
{{ $message->embedpublic_path()) }}
