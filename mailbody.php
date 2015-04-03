<?php
// Set email format to HTML
$soep = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-soep-$i"]) && $_POST["aantal-soep-$i"] != "" && $_POST["aantal-soep-$i"]!= 0) {
  $soep .= $soepen[$i-1]["gerecht"] . ": " . $_POST["aantal-soep-$i"] . "<br>";
  }
}
if ($soep != "") {
  $soep = "<h3>Bestelde soepen:</h3>" . $soep . "<br>";
}
$voorgerecht = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-voorgerecht-$i"]) && $_POST["aantal-voorgerecht-$i"] != "" && $_POST["aantal-voorgerecht-$i"]!= 0) {
  $voorgerecht .= $voorgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-voorgerecht-$i"] . "<br>";
  }
}
if ($voorgerecht != "") {
  $voorgerecht = "<h3>Bestelde voorgerechten:</h3>" . $voorgerecht . "<br>";
}
$hoofdgerecht = "";
for ($i = 1; $i <= 4; $i++) {
if (isset($_POST["aantal-hoofdgerecht-$i"]) && $_POST["aantal-hoofdgerecht-$i"] != "" && $_POST["aantal-hoofdgerecht-$i"]!= 0) {
  $hoofdgerecht .= $hoofdgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-hoofdgerecht-$i"] . "<br>";
  }
}
if ($hoofdgerecht != "") {
  $hoofdgerecht = "<h3>Bestelde hoofdgerechten:</h3>" . $hoofdgerecht . "<br>";
}
$kindermenus = "";
for ($i = 1; $i <= 1; $i++) {
if (isset($_POST["aantal-kindermenu-$i"]) && $_POST["aantal-kindermenu-$i"] != "" && $_POST["aantal-kindermenu-$i"]!= 0) {
  $kindermenus .= $kindermenu[$i-1]["gerecht"] . ": " . $_POST["aantal-kindermenu-$i"] . "<br>";
  }
}
if ($kindermenus != "") {
  $kindermenus = "<h3>Bestelde kindermenus:</h3>" . $kindermenus . "<br>";
}
$pastas = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-pasta-$i"]) && $_POST["aantal-pasta-$i"] != "" && $_POST["aantal-pasta-$i"]!= 0) {
  $pastas .= $pasta[$i-1]["gerecht"] . ": " . $_POST["aantal-pasta-$i"] . "<br>";
  }
}
if ($pastas != "") {
  $pastas = "<h3>Bestelde pastas:</h3>" . $pastas . "<br>";
}
$maaltijdsalade = "";
for ($i = 1; $i <= 4; $i++) {
if (isset($_POST["aantal-maaltijdsalades-$i"]) && $_POST["aantal-maaltijdsalades-$i"] != "" && $_POST["aantal-maaltijdsalades-$i"]!= 0) {
  $maaltijdsalade .= $maaltijdsalades[$i-1]["gerecht"] . ": " . $_POST["aantal-maaltijdsalades-$i"] . "<br>";
  }
}
if ($maaltijdsalade != "") {
  $maaltijdsalade = "<h3>Bestelde maaltijdsalades:</h3>" . $maaltijdsalade . "<br>";
}
$dessert = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-desserts-$i"]) && $_POST["aantal-desserts-$i"] != "" && $_POST["aantal-desserts-$i"]!= 0) {
  $dessert .= $desserts[$i-1]["gerecht"] . ": " . $_POST["aantal-desserts-$i"] . "<br>";
  }
}
if ($dessert != "") {
  $dessert = "<h3>Bestelde desserts:</h3>" . $dessert . "<br>";
}
$totaal = "<b>Totaal: </b>"  . " &euro; " . number_format((float)$_POST["totaal"], 2, '.', '');
$body = wordwrap("<h2>Persoonlijke Gegevens</h2>" . "<b>Naam: </b>" . " " . $_POST["naam"] . " " . $_POST["voornaam"] .
        "<br><b>Adres: </b>" . $_POST["adres"] . " " . $_POST["nummer"] . " / " . $_POST["bus"] .
        "<br><b>           </b>" . $_POST["postcode"] . " " . $_POST["gemeente"] .
        "<br><b>E-mail: </b>" . $_POST["email"] . " " . "<br><b>Tel.</b>" . " " . $_POST["tel"] .
        "<br><h2>Aantal Personen en Tijdstip</h2>" . "<b>Aantal Personen: </b>" . " " . $_POST["aantal_personen"] . "<br>" . "<b>Tijdstip: </b>" . $_POST["tijdstip"] . "<br>" .
        $soep .
        $voorgerecht .
        $hoofdgerecht .
        $kindermenus .
        $pastas .
        $maaltijdsalade .
        $dessert .
        "<hr>" . "<hr>" .
        $totaal);
?>
