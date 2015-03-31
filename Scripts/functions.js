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
