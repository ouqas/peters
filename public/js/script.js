jQuery(document).ready(function () {

                $('#submit').on('click', function (){
                	console.log('here');
                	//alert(!$.trim($('#name').val()));
					//alert($('#guide').is(':checked')) ;
					var token=$('#_token').val();
  					if ( $.trim($('#name').val()) && $.trim($('#email').val()) && $.trim($('#adrress').val()) && $.trim($('#date-picker').val()) && $.trim($('#phone').val())  )
  					{
  						if( isEmail($('#email').val()) )
  						{
  							$.ajax({
                                type: "POST",
                                url: "/reserver",
                                data: {
                                	name : $('#name').val(),
                                    flight : $('#flightq').val(),
                                    people : $('#people').val(),
                                    email : $('#email').val(),
                                    addres : $('#adrress').val(),
                                    date : $('#date-picker').val(),
                                    phone : $('#phone').val(),
                                    destadress : $('#destAdress').val(),
                                    guide : $('#guide').is(':checked'),
                                    country : $('#coutry').val(),
                                    message : $('#message').val(),
									                  _token : token
                                }

                            }).done(function (data) {
                                console.log(data);
                                $('#snackbar').text("Reservation Sent , you will be contacted soon ");
                                   $('#snackbar').addClass("show");
                                  setTimeout(function(){$('#snackbar').removeClass()}, 3000);

                            });
  						}
  						else {
  						//	alert('email non conforme');
                $('#snackbar').text('email non conforme');
                                   $('#snackbar').addClass("show");
                                  setTimeout(function(){$('#snackbar').removeClass()}, 3000);
  						}
  					}
  					else {
              $('#snackbar').text('champs obligatoire');
                                   $('#snackbar').addClass("show");
                                  setTimeout(function(){$('#snackbar').removeClass()}, 3000);
                                }

                	/* $.ajax({
                                type: "POST",
                                url: "{{url('/getPMTparDate')}}",
                                data: {
                                	name : $('#name').val(),
                                    flight : $('#flightq').val(),
                                    people : $('#people').val(),
                                    email : $('#email').val(),
                                    addres : $('#adrress').val(),
                                    date : $('#date-picker').val(),
                                    phone : $('#phone').val(),
                                    destadress : $('#destAdress').val(),
                                    guide : $('#guide').val(),
                                    country : $('#coutry').val(),
                                    message : $('#message').val(),
                                }

                            }).done(function (data) {
                                console.log(data);


                            });*/

                });

          // send messqge to administrqteur
          $("#c_submit").on('click', function () {
            var token=$('#_token').val();
            //alert($('#c_email').val());

              console.log("sendd");

              if ($.trim($('#c_name').val()) && $.trim($('#c_message').val())) {
                if( isEmail($('#c_email').val()) )
    						{
                  //alert("all is vell");
                  $.ajax({
                                  type: "POST",
                                  url: "/sendmessage",
                                  data: {
                                  	  name : $('#c_name').val(),
                                      message : $('#c_message').val(),
                                      email : $('#c_email').val(),
  									                  _token : token
                                  }

                              }).done(function (data) {
                                  console.log(data);
                                  $('#snackbar').text("Message Sent , you will be contacted soon ");
                                     $('#snackbar').addClass("show");
                                    setTimeout(function(){$('#snackbar').removeClass()}, 3000);

                              });
                }
                else {
    						//	alert('email non conforme');
                  $('#snackbar').text('email non conforme');
                                     $('#snackbar').addClass("show");
                                    setTimeout(function(){$('#snackbar').removeClass()}, 3000);
    						}
              }
              else {
  						//	alert('email non conforme');
                $('#snackbar').text('Le nom et message sont obligatoire');
                                   $('#snackbar').addClass("show");
                                  setTimeout(function(){$('#snackbar').removeClass()}, 3000);
  						}
          });

          $('.readmore').on('click', function () {
           var text = $(this).parent().parent().prev().text();
           var img = $(this).parent().parent().prev().prev().text();
           console.log(img);
           $('#modaltext').find('p').text(text);

           $("#modalimg").css("background-image", "url("+img+")");

          });
          $(".shortext").each(function( index ) {

          //  console.log( $(this).text().substring(0,180)+"..." );
            // stockage dial text kbir
          //  $(this).text($(this).text().substring(0,180)+"...");
          });
                function isEmail(email) {
				  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				  return regex.test(email);
				}
});
