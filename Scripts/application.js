$(document).ready(function() {
  $('#navform').click(function() {
    var target = $(this.hash);
    if (target.length == 0) target = $('a[name="' + this.hash.substr(1) + '"]');
    if (target.length == 0) target = $('html');
    $('html, body').animate({ scrollTop: target.offset().top }, 600);
    return false;
  });

  if($())

  $('.form-horizontal').change(function() {
    PrijsBerekening();
  });

  $('.clickout').click(function() {
    $(this).find('.glyphicon').toggleClass("glyphicon-menu-down glyphicon-menu-up")
  });

  $('#bestel').click(function() { Overzicht(); });
});
