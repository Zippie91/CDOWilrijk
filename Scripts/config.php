<?php include("_config.php"); ?>
<script>
  soepen = new Array();
  voorgerechten = new Array();
  hoofdgerechten = new Array();
  kindermenu = new Array();
  pasta = new Array();
  maaltijdsalades = new Array();
  desserts = new Array();

  <?php
  BuildJSArray($soepen, "soepen");
  BuildJSArray($voorgerechten, "voorgerechten");
  BuildJSArray($hoofdgerechten, "hoofdgerechten");
  BuildJSArray($kindermenu, "kindermenu");
  BuildJSArray($pasta, "pasta");
  BuildJSArray($maaltijdsalades, "maaltijdsalades");
  BuildJSArray($desserts, "desserts");
  ?>
</script>
<?php
// Build the JS array from _config.php 
function BuildJSArray($array, $name) {
  for($i = 0; $i < sizeof($array); $i++) {
    echo "var gerechtnaam = \"" . $array[$i]["gerecht"] . "\";\n";
    echo "var gerechtprijs = " . $gerechtprijs = $array[$i]["prijs"] . ";\n";
    echo $name . ".push([gerechtnaam, gerechtprijs]);\n\n";
  }
}
?>
