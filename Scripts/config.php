<script>
  soepen = new Array();
  voorgerechten = new Array();
  hoofdgerechten = new Array();
  kindermenu = new Array();
  pasta = new Array();
  maaltijdsalades = new Array();
  desserts = new Array();

  <?php for($i = 0; $i < sizeof($soepen); $i++) { ?>
      var gerechtnaam = "<?php echo $soepen[$i]["gerecht"]; ?>";
      var gerechtprijs = "<?php echo $soepen[$i]["prijs"]; ?>";
      soepen.push([gerechtnaam, gerechtprijs]);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($voorgerechten); $i++) { ?>
      var gerechtnaam = "<?php echo $voorgerechten[$i]["gerecht"]; ?>";
      var gerechtprijs = "<?php echo $voorgerechten[$i]["prijs"]; ?>";
      voorgerechten.push([gerechtnaam, gerechtprijs]);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($hoofdgerechten); $i++) { ?>
      var gerechtnaam = "<?php echo $hoofdgerechten[$i]["gerecht"]; ?>";
      var gerechtprijs = "<?php echo $hoofdgerechten[$i]["prijs"]; ?>";
      hoofdgerechten.push([gerechtnaam, gerechtprijs]);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($kindermenu); $i++) { ?>
      var gerechtnaam = "<?php echo $kindermenu[$i]["gerecht"]; ?>";
      var gerechtprijs = "<?php echo $kindermenu[$i]["prijs"]; ?>";
      kindermenu.push([gerechtnaam, gerechtprijs]);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($pasta); $i++) { ?>
      var gerechtnaam = "<?php echo $pasta[$i]["gerecht"]; ?>";
      var gerechtprijs = "<?php echo $pasta[$i]["prijs"]; ?>";
      pasta.push([gerechtnaam, gerechtprijs]);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($maaltijdsalades); $i++) { ?>
      var gerechtnaam = "<?php echo $maaltijdsalades[$i]["gerecht"]; ?>";
      var gerechtprijs = "<?php echo $maaltijdsalades[$i]["prijs"]; ?>";
      maaltijdsalades.push([gerechtnaam, gerechtprijs]);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($desserts); $i++) { ?>
      var gerechtnaam = "<?php echo $desserts[$i]["gerecht"]; ?>";
      var gerechtprijs = "<?php echo $desserts[$i]["prijs"]; ?>";
      desserts.push([gerechtnaam, gerechtprijs]);
  <?php } ?>
</script>
