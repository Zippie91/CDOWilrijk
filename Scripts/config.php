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
      soepen.push(gerechtnaam);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($voorgerechten); $i++) { ?>
      var gerechtnaam = "<?php echo $voorgerechten[$i]["gerecht"]; ?>";
      voorgerechten.push(gerechtnaam);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($hoofdgerechten); $i++) { ?>
      var gerechtnaam = "<?php echo $hoofdgerechten[$i]["gerecht"]; ?>";
      hoofdgerechten.push(gerechtnaam);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($kindermenu); $i++) { ?>
      var gerechtnaam = "<?php echo $kindermenu[$i]["gerecht"]; ?>";
      kindermenu.push(gerechtnaam);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($pasta); $i++) { ?>
      var gerechtnaam = "<?php echo $pasta[$i]["gerecht"]; ?>";
      pasta.push(gerechtnaam);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($maaltijdsalades); $i++) { ?>
      var gerechtnaam = "<?php echo $maaltijdsalades[$i]["gerecht"]; ?>";
      maaltijdsalades.push(gerechtnaam);
  <?php } ?>

  <?php for($i = 0; $i < sizeof($desserts); $i++) { ?>
      var gerechtnaam = "<?php echo $desserts[$i]["gerecht"]; ?>";
      desserts.push(gerechtnaam);
  <?php } ?>
</script>
