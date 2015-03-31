function Overzicht() {
  var userdata = new Array();
  var bestellingeten = new Array();

  var datastring = $('form.form-horizontal').serializeArray();
  //$(".modal-body").text("");

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
        break;
      case "tel":
        break;
      case "adres":
        break;
      case "nummer":
        break;
      case "bus":
        break;
      case "gemeente":
        break;
      case "postcode":
        break;
      case "aantal_personen":
        break;
      case "tijdstip":
        break;
      case "betaling":
        break;
      default:
        break;
    }

    $('.userdata').append(value.name + " : " + value.value + "<br>");
  });

  $.each(bestellingeten, function(i, value) {
    $('.bestellingeten').append(value.name + " : " + value.value + "<br>");
  });

  /*
  $.each(datastring, function(i, value) {
    if(value.value != "") {
      $('.modal-body').append("<b>" + value.name + "</b>: " + value.value + "<br>");
    }
  });
  */
}
