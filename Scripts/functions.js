function Overzicht() {
  var datastring = $('form.form-horizontal').serializeArray();

  $.each(datastring, function(i, value) {
    if(value.value != "") {
      $('.modal-body').append("<b>" + value.name + "</b>: " + value.value + "<br>");
    }
  });

  //$(".modal-body").text(datastring);
}


/*function PrijsBerekening() {
	//Soepen
  var val = 0;
  val = $("#aantal_soep-1").val() * 3.00;
  $('#totaal-soep-1').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_soep-2").val() * 3.00;
  $('#totaal-soep-2').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_soep-3").val() * 3.00;
  $('#totaal-soep-3').text( "€ " + val.toFixed(2) );

  	//Voorgerechten
  var val = 0;
  val = $("#aantal_voorgerecht-1").val() * 7.50;
  $('#totaal-voorgerecht-1').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_voorgerecht-2").val() * 7.50;
  $('#totaal-voorgerecht-2').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_voorgerecht-3").val() * 7.50;
  $('#totaal-voorgerecht-3').text( "€ " + val.toFixed(2) );

  	//Hoofdgerechten
  var val = 0;
  val = $("#aantal_hoofdgerecht-1").val() * 12.50;
  $('#totaal-hoofdgerecht-1').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_hoofdgerecht-2").val() * 12.50;
  $('#totaal-hoofdgerecht-2').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_hoofdgerecht-3").val() * 12.50;
  $('#totaal-hoofdgerecht-3').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_hoofdgerecht-4").val() * 10.00;
  $('#totaal-hoofdgerecht-4').text( "€ " + val.toFixed(2) );

  	//Kindermenu
  var val = 0;
  val = $("#aantal_kindermenu-1").val() * 6.50;
  $('#totaal-kindermenu-1').text( "€ " + val.toFixed(2) );

  	//Pasta
  var val = 0;
  val = $("#aantal_pasta-1").val() * 7.50;
  $('#totaal-pasta-1').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_pasta-2").val() * 7.50;
  $('#totaal-pasta-2').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_pasta-3").val() * 7.50;
  $('#totaal-pasta-3').text( "€ " + val.toFixed(2) );

  	//Maaltijdsalades
  var val = 0;
  val = $("#aantal_maaltijdsalades-1").val() * 8.50;
  $('#totaal-maaltijdsalades-1').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_maaltijdsalades-2").val() * 8.50;
  $('#totaal-maaltijdsalades-2').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_maaltijdsalades-3").val() * 8.50;
  $('#totaal-maaltijdsalades-3').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_maaltijdsalades-4").val() * 8.50;
  $('#totaal-maaltijdsalades-4').text( "€ " + val.toFixed(2) );

    //Desserts
  var val = 0;
  val = $("#aantal_desserts-1").val() * 4.50;
  $('#totaal-desserts-1').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_desserts-2").val() * 4.50;
  $('#totaal-desserts-2').text( "€ " + val.toFixed(2) );

  var val = 0;
  val = $("#aantal_desserts-3").val() * 6.00;
  $('#totaal-desserts-3').text( "€ " + val.toFixed(2) );

} */
