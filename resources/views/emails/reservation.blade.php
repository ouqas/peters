<div style="font-family: Times New Roman, Times, serif ;font-size: 16px;">
Dear <strong>Peter,</strong>
<p>You have a new reservation made today by {{$reservation->nom}} .<br>
 Here are the details:</p><br>
<br>
<div style="margin-left: 80px">
<strong>Client name : </strong>{{ $reservation->nom }}<br>
<strong>Pick Up Address:</strong> {{ $reservation->depart }}<br>
<strong>Date:</strong> {{ $reservation->datede }}<br>
<strong>Phone:	</strong>{{ $reservation->telephone }}<br>
<strong>Email:	</strong>{{ $reservation->email}}<br>
<strong>Destination Address:</strong>	{{ $reservation->destination }}<br>
<strong>How Many People: </strong>{{ $reservation->pass_num }}<br>
<strong>Guided Tour : </strong>yes /no {{ $reservation->accompagnement }}<br>
</div>
<br>
Peter Private Car Driver – Driving Service.<br>
<a href="www.facebook/petertakesyoueverywhere.com">www.facebook/petertakesyoueverywhere.com</a> | <a href="www.instagrame/ petertakesyoueverywhere.com">www.instagrame/ petertakesyoueverywhere.com</a><br>
</div>
