function Overzicht() {
  /*var map = {};

  $('form-control').each(function() {
    map[$(this).attr("name")] = $(this).val();
  });

  $.each(map, function(index, val) {
    alert( index + " : " + val );
  });
  */
  var datastring = $("form.form-horizontal").serialize();
        $.ajax({
            type: "POST",
            url: "index.php",
            data: datastring,
            success: function(data) {
                 alert('Data send');
            },
            error: function(data) {
              alert('Error!');
            }
        });
}
