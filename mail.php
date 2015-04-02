<?php
$recipient = 'lekker_eten@donboscowilrijk.be';

$soep = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-soep-$i"]) && $_POST["aantal-soep-$i"] != "" && $_POST["aantal-soep-$i"]!= 0) {
  $soep .= $soepen[$i-1]["gerecht"] . ": " . $_POST["aantal-soep-$i"] . "<br>";
  }
}
if ($soep != "") {
  $soep = "<h3>Bestelde soepen:<hr></h3>" . $soep . "<br>";
}

$voorgerecht = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-voorgerecht-$i"]) && $_POST["aantal-voorgerecht-$i"] != "" && $_POST["aantal-voorgerecht-$i"]!= 0) {
  $voorgerecht .= $voorgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-voorgerecht-$i"] . "<br>";
  }
}
if ($voorgerecht != "") {
  $voorgerecht = "<h3>Bestelde voorgerechten:<hr></h3>" . $voorgerecht . "<br>";
}

$hoofdgerecht = "";
for ($i = 1; $i <= 4; $i++) {
if (isset($_POST["aantal-hoofdgerecht-$i"]) && $_POST["aantal-hoofdgerecht-$i"] != "" && $_POST["aantal-hoofdgerecht-$i"]!= 0) {
  $hoofdgerecht .= $hoofdgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-hoofdgerecht-$i"] . "<br>";
  }
}
if ($hoofdgerecht != "") {
  $hoofdgerecht = "<h3>Bestelde hoofdgerechten:<hr></h3>" . $hoofdgerecht . "<br>";
}

$kindermenus = "";
for ($i = 1; $i <= 1; $i++) {
if (isset($_POST["aantal-kindermenu-$i"]) && $_POST["aantal-kindermenu-$i"] != "" && $_POST["aantal-kindermenu-$i"]!= 0) {
  $kindermenus .= $kindermenu[$i-1]["gerecht"] . ": " . $_POST["aantal-kindermenu-$i"] . "<br>";
  }
}
if ($kindermenus != "") {
  $kindermenus = "<h3>Bestelde kindermenus:<hr></h3>" . $kindermenus . "<br>";
}

$pastas = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-pasta-$i"]) && $_POST["aantal-pasta-$i"] != "" && $_POST["aantal-pasta-$i"]!= 0) {
  $pastas .= $pasta[$i-1]["gerecht"] . ": " . $_POST["aantal-pasta-$i"] . "<br>";
  }
}
if ($pastas != "") {
  $pastas = "<h3>Bestelde pastas:<hr></h3>" . $pastas . "<br>";
}

$maaltijdsalade = "";
for ($i = 1; $i <= 4; $i++) {
if (isset($_POST["aantal-maaltijdsalades-$i"]) && $_POST["aantal-maaltijdsalades-$i"] != "" && $_POST["aantal-maaltijdsalades-$i"]!= 0) {
  $maaltijdsalade .= $maaltijdsalades[$i-1]["gerecht"] . ": " . $_POST["aantal-maaltijdsalades-$i"] . "<br>";
  }
}
if ($maaltijdsalade != "") {
  $maaltijdsalade = "<h3>Bestelde maaltijdsalades:<hr></h3>" . $maaltijdsalades . "<br>";
}

$dessert = "";
for ($i = 1; $i <= 3; $i++) {
if (isset($_POST["aantal-desserts-$i"]) && $_POST["aantal-desserts-$i"] != "" && $_POST["aantal-desserts-$i"]!= 0) {
  $dessert .= $desserts[$i-1]["gerecht"] . ": " . $_POST["aantal-desserts-$i"] . "<br>";
  }
}
if ($dessert != "") {
  $dessert = "<h3>Bestelde desserts:<hr></h3>" . $dessert . "<br>";
}

$totaal = "<b>Totaal: </b>"  . " € " . number_format((float)$_POST["totaal"], 2, '.', '');

$body = "<h2>Persoonlijke gegevens</h2>" .
        "<table style='border:none;'>" .
          "<tr>" .
            "<td><b>Naam:</b></td>" .
            "<td>" . $_POST['voornaam'] . " " . $_POST['naam'] . "</td>" .
          "</tr>" .
          "<tr>" .
            "<td><b>Email:</b></td>" .
            "<td>" . $_POST['email'] . "</td>" .
          "</tr>" .
          "<tr>" .
            "<td><b>Telefoon:</b></td>" .
            "<td>" . $_POST['tel'] . "</td>" .
          "</tr>" .
          "<tr>" .
            "<td><b>Adres:</b></td>" .
            "<td>" . $_POST['adres'] . " " . $_POST['nummer'];
if($_POST['bus'] != "") {
  $body .= " / " . $_POST['bus'];
}

$body .=     "</td>" .
          "</tr>" .
          "<tr>" .
            "<td>&nbsp;</td>" .
            "<td>" . $_POST['postcode'] . " " . $_POST['gemeente'] . "</td>" .
          "</tr>" .
        "</table>" .
        "<h2>Aantal personen en tijdstip</h2>" .
        "<table style='border:none;'>" .
          "<tr>" .
            "<td><b>Aantal personen:</b></td>" .
            "<td>" . $_POST['aantal_personen'] . "</td>" .
          "</tr>" .
          "<tr>" .
            "<td><b>Tijdstip:</b></td>" .
            "<td>" . $_POST['tijdstip'] . "</td>" .
          "</tr>" .
          "<tr>" .
            "<td><b>Betalingswijze:</b></td>" .
            "<td>" . $_POST['betaling'] . "</td>" .
          "</tr>" .
        "</table>";
  $body .= $soep . $voorgerecht . $hoofdgerecht . $kindermenu . $pasta . $maaltijdsalade . $dessert;
  $body .=   "<hr>" . $totaal;


$to = strip_tags($_POST['email']);
$subject = 'Bestelling van' . " " . $_POST["naam"] . " " . $_POST["voornaam"];

$headers = "From: " . strip_tags($recipient) . "\r\n";
$headers .= "Reply-To: ". strip_tags($recipient) . "\r\n";
$headers .= "Cc: " . strip_tags($recipient) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

mail($to, $subject, $body, $headers);

?>
