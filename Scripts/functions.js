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
        AppendText("voornaam", value.value);
        break;
      case "naam":
        AppendText("naam", value.value);
        break;
      case "email":
        AppendText("email", value.value);
        break;
      case "tel":
        AppendText("tel", value.value);
        break;
      case "adres":
        AppendText("adres", value.value);
        break;
      case "nummer":
        AppendText("nummer", value.value);
        break;
      case "bus":
        AppendText("bus", " / " + value.value);
        break;
      case "gemeente":
        AppendText("gemeente", value.value);
        break;
      case "postcode":
        AppendText("postcode", value.value);
        break;
      case "aantal_personen":
        AppendText("aantal_personen", value.value);
        break;
      case "tijdstip":
        AppendText("tijdstip", value.value);
        break;
      case "betaling":
        AppendText("betaling", value.value);
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
        FillOrder('Soepen', number, value.value);
        break;
      case "voorgerecht":
        MakeHeader("Voorgerechten");
        FillOrder('Voorgerechten', number, value.value);
        break;
      case "hoofdgerecht":
        MakeHeader("Hoofdgerechten");
        FillOrder('Hoofdgerechten', number, value.value);
        break;
      case "kindermenu":
        MakeHeader("Kindermenu");
        FillOrder('Kindermenu', number, value.value);
        break;
      case "pasta":
        MakeHeader("Pasta");
        FillOrder('Pasta', number, value.value);
        break;
      case "maaltijdsalades":
        MakeHeader("Maaltijdsalades");
        FillOrder('Maaltijdsalades', number, value.value);
        break;
      case "desserts":
        MakeHeader("Desserts");
        FillOrder('Desserts', number, value.value);
        break;
    }
  });
  var totaalprijs = parseInt($('#hiddentotaal').val());
  $('span.bestellingtotaal').text('€ ' + totaalprijs.toFixed(2));
}

function MakeHeader(type) {
  var children = $('.bestellingeten').children();
  var count = 0;

  for(i = 0; i < children.length; i++) {
    if(children[i].tagName != 'H4') {
    } else if(type == children[i].innerHTML) {
      count = -1;
      break;
    }
  }

  if ( count != -1 ) {
    $('.bestellingeten').append("<h4>" + type + "</h4>");
  }
}

function FillOrder(type, number, amount) {
  var gerecht = FindDish(type, (number - 1));
  var headers = $('.bestellingeten').children('H4');
  var label = "<label>" + gerecht[0] + "</label>";
  var totaalprijs = gerecht[1] * amount;

  for(i = 0; i < headers.length; i++) {
    if(headers[i].innerHTML == type) {
      if(amount != 0) {
        $(headers[i]).last().after("<div class='row'><div class='col-xs-8'>" + label + "</div><div class='col-xs-1'>" + amount + "</div><div class='col-xs-3'>€ " + totaalprijs.toFixed(2) + "</div></div>");
      }
    }
  }
}

function FindDish(disharray, number) {
  switch(disharray) {
    case 'Soepen':
      return soepen[number];
    case 'Voorgerechten':
      return voorgerechten[number];
    case 'Hoofdgerechten':
      return hoofdgerechten[number];
    case 'Kindermenu':
      return kindermenu[number];
    case 'Pasta':
      return pasta[number];
    case 'Maaltijdsalades':
      return maaltijdsalades[number];
    case 'Desserts':
      return desserts[number];
  }
}

function AppendText(name, value) {
  $("span." + name).append(value);
}
