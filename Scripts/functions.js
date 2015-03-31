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
    $('.bestellingeten').append(value.name + " : " + value.value + "<br>");
  });
}
