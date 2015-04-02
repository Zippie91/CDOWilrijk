<?php include ("_config.php"); ?>
<html lang='nl'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bedankt! || CDO Don Bosco Wilrijk</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/jumbotron_narrow.css">
    <link rel="stylesheet" href="CSS/main.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        <h1>Bedankt voor uw bestelling!</h1>
        <p class="lead">U ontvangt direct een mail met een overzicht van uw bestelling.<br>Na verwerking wordt uw bestelling nog eens bevestigd met juiste uur en betalingsgegevens.</p>
      </div>
      <?php

      $recipient = 'lekker_eten@donboscowilrijk.be';

      $to = strip_tags($_POST['email']);
      $subject = 'Bestelling van' . " " . $_POST["naam"] . " " . $_POST["voornaam"];

      $headers = "From: " . strip_tags($recipient) . "\r\n";
      $headers .= "Reply-To: ". strip_tags($recipient) . "\r\n";
      $headers .= "Cc: " . strip_tags($recipient) . "\r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

      $soep = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-soep-$i"]) && $_POST["aantal-soep-$i"] != "" && $_POST["aantal-soep-$i"]!= 0) {
        $soep .= $soepen[$i-1]["gerecht"] . ": " . $_POST["aantal-soep-$i"] . "<br>";
        }
      }
      if ($soep != "") {
        $soep = "<h2>Bestelde soepen:<hr></h2> <br>" . $soep . "<br>";
      }

      $voorgerecht = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-voorgerecht-$i"]) && $_POST["aantal-voorgerecht-$i"] != "" && $_POST["aantal-voorgerecht-$i"]!= 0) {
        $voorgerecht .= $voorgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-voorgerecht-$i"] . "<br>";
        }
      }
      if ($voorgerecht != "") {
        $voorgerecht = "<h2>Bestelde voorgerechten:<hr></h2> <br>" . $voorgerecht . "<br>";
      }

      $hoofdgerecht = "";
      for ($i = 1; $i <= 4; $i++) {
      if (isset($_POST["aantal-hoofdgerecht-$i"]) && $_POST["aantal-hoofdgerecht-$i"] != "" && $_POST["aantal-hoofdgerecht-$i"]!= 0) {
        $hoofdgerecht .= $hoofdgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-hoofdgerecht-$i"] . "<br>";
        }
      }
      if ($hoofdgerecht != "") {
        $hoofdgerecht = "<h2>Bestelde hoofdgerechten:<hr></h2> <br>" . $hoofdgerecht . "<br>";
      }

      $kindermenus = "";
      for ($i = 1; $i <= 1; $i++) {
      if (isset($_POST["aantal-kindermenu-$i"]) && $_POST["aantal-kindermenu-$i"] != "" && $_POST["aantal-kindermenu-$i"]!= 0) {
        $kindermenus .= $kindermenu[$i-1]["gerecht"] . ": " . $_POST["aantal-kindermenu-$i"] . "<br>";
        }
      }
      if ($kindermenus != "") {
        $kindermenus = "<h2><h2>Bestelde kindermenus:<hr></h2> <br>" . $kindermenus . "<br>";
      }

      $pastas = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-pasta-$i"]) && $_POST["aantal-pasta-$i"] != "" && $_POST["aantal-pasta-$i"]!= 0) {
        $pastas .= $pasta[$i-1]["gerecht"] . ": " . $_POST["aantal-pasta-$i"] . "<br>";
        }
      }
      if ($pastas != "") {
        $pastas = "<h2>Bestelde pastas:<hr></h2> <br>" . $pastas . "<br>";
      }

      $maaltijdsalade = "";
      for ($i = 1; $i <= 4; $i++) {
      if (isset($_POST["aantal-maaltijdsalades-$i"]) && $_POST["aantal-maaltijdsalades-$i"] != "" && $_POST["aantal-maaltijdsalades-$i"]!= 0) {
        $maaltijdsalade .= $maaltijdsalades[$i-1]["gerecht"] . ": " . $_POST["aantal-maaltijdsalades-$i"] . "<br>";
        }
      }
      if ($maaltijdsalade != "") {
        $maaltijdsalade = "<h2>Bestelde maaltijdsalades:<hr></h2> <br>" . $maaltijdsalade . "<br>";
      }

      $dessert = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-desserts-$i"]) && $_POST["aantal-desserts-$i"] != "" && $_POST["aantal-desserts-$i"]!= 0) {
        $dessert .= $desserts[$i-1]["gerecht"] . ": " . $_POST["aantal-desserts-$i"] . "<br>";
        }
      }
      if ($dessert != "") {
        $dessert = "<h2>Bestelde desserts:<hr></h2> <br>" . $dessert . "<br>";
      }

      $totaal = "<b>Totaal: </b>"  . " &euro; " . number_format((float)$_POST["totaal"], 2, '.', '');

      $body = wordwrap("<h2>Persoonlijke Gegevens<hr> </h2>" . "<b>Naam: </b>" . " " . $_POST["naam"] . " " . $_POST["voornaam"] .
              "<br><b>Adres: </b>" . $_POST["adres"] . " " . $_POST["nummer"] . " / " . $_POST["bus"] .
              "<br>" . $_POST["postcode"] . " " . $_POST["gemeente"] .
              "<br><b>E-mail: </b>" . $_POST["email"] . " " . "<br><b>Tel.</b>" . " " . $_POST["tel"] .

              "<br><h2>Aantal Personen en Tijdstip<hr> </h2>" . "<b>Aantal Personen: </b>" . " " . $_POST["aantal_personen"] . "<br>" . "<b>Tijdstip: </b>" . $_POST["tijdstip"] . "<br>" .

              $soep .
              $voorgerecht .
              $hoofdgerecht .
              $kindermenus .
              $pastas .
              $maaltijdsalade .
              $dessert .
              "<hr>" .
              $totaal);

      mail($to, $subject, $body, $headers);
      ?>
    </div>
  </body>
</html>
