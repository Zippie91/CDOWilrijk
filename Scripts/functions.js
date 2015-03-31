function Overzicht() {
  var userdata = new Array();
  var bestellingeten = new Array();

  var datastring = $('form.form-horizontal').serializeArray();
  $('.makeempty').empty();

  $.each(datastring, function(i, value) {
    if(value.value != "") {
      if(value.name.indexOf('aantal-') != -1) {
        bestellingeten.push(value);
      } else {
        userdata.push(value);
      }
    }
  });

  $.each(userdata, function(i, value) {
    switch(value.name) {
      case "voornaam":
        $('span.voornaam').append(value.value);
        break;
      case "naam":
        $('span.naam').append(value.value);
        break;
      case "email":
        $('span.email').append(value.value);
        break;
      case "tel":
        $('span.tel').append(value.value);
        break;
      case "adres":
        $('span.adres').append(value.value);
        break;
      case "nummer":
        $('span.nummer').append(value.value);
        break;
      case "bus":
        $('span.bus').append("/" + value.value);
        break;
      case "gemeente":
        $('span.gemeente').append(value.value);
        break;
      case "postcode":
        $('span.postcode').append(value.value);
        break;
      case "aantal_personen":
        $('span.aantal_personen').append(value.value);
        break;
      case "tijdstip":
        $('span.tijdstip').append(value.value);
        break;
      case "betaling":
        $('span.betaling').append(value.value);
        break;
      default:
        break;
    }
  });

  $.each(bestellingeten, function(i, value) {
    var res = value.name.split("-");
    var soort = res[1];
    var number = parseInt(res[2]);

    switch(soort) {
      case "soep":
        MakeHeader("Soepen");
        break;
      case "voorgerecht":
        MakeHeader("Voorgerechten");
        break;
      case "hoofdgerecht":
        MakeHeader("Hoofdgerechten");
        break;
      case "kindermenu":
        MakeHeader("Kindermenu");
        break;
      case "pasta":
        MakeHeader("Pasta");
        break;
      case "maaltijdsalades":
        MakeHeader("Maaltijdsalades");
        break;
      case "desserts":
        MakeHeader("Desserts");
        break;
    }
  });
}

function MakeHeader(type) {
  var children = $('.bestellingeten').children();
  var count = 0;

  for(i = 0; i < children.length; i++) {
    if(children[i].tagName != 'H4') {
      alert('No H4 found! Adding <h4>' + type + "</h4>");
    } else if(type == children[i].innerHTML) {
      count = -1;
      break;
    } else {
      count++;
    }
  }

  if ( count != -1 ) {
    $('.bestellingeten').append("<h4>" + type + "</h4>");
  }
}
