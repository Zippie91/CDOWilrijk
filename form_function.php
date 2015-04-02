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
        <p class="lead">U ontvangt binnenkort een definitieve bevestiging van uw bestelling.</p>
      </div>
      <?php
      require 'PHPMailer/PHPMailerAutoload.php';

      $mail = new PHPMailer;

      //$mail->SMTPDebug = 3;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'yannicktest.test@gmail.com';                 // SMTP username
      $mail->Password = 'cdowilrijk123456789';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to

      $mail->FromName = $_POST["email"];
      $mail->addAddress('yannicktest.test@gmail.com', 'Yannick');     // Add a recipient

      $mail->isHTML(true);                                  // Set email format to HTML

      $soep = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-soep-$i"]) && $_POST["aantal-soep-$i"] != "" && $_POST["aantal-soep-$i"]!= 0) {
        $soep .= $soepen[$i-1]["gerecht"] . ": " . $_POST["aantal-soep-$i"] . "<br>";
        }
      }
      if ($soep != "") {
        $soep = "<h2>Bestelde soepen:<hr></h2> <br>" . $soep;
      }

      $voorgerecht = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-voorgerecht-$i"]) && $_POST["aantal-voorgerecht-$i"] != "" && $_POST["aantal-voorgerecht-$i"]!= 0) {
        $voorgerecht .= $voorgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-voorgerecht-$i"] . "<br>";
        }
      }
      if ($voorgerecht != "") {
        $voorgerecht = "<h2>Bestelde voorgerechten:<hr></h2> <br>" . $voorgerecht;
      }

      $hoofdgerecht = "";
      for ($i = 1; $i <= 4; $i++) {
      if (isset($_POST["aantal-hoofdgerecht-$i"]) && $_POST["aantal-hoofdgerecht-$i"] != "" && $_POST["aantal-hoofdgerecht-$i"]!= 0) {
        $hoofdgerecht .= $hoofdgerechten[$i-1]["gerecht"] . ": " . $_POST["aantal-hoofdgerecht-$i"] . "<br>";
        }
      }
      if ($hoofdgerecht != "") {
        $hoofdgerecht = "<h2>Bestelde hoofdgerechten:<hr></h2> <br>" . $hoofdgerecht;
      }

      $kindermenus = "";
      for ($i = 1; $i <= 1; $i++) {
      if (isset($_POST["aantal-kindermenu-$i"]) && $_POST["aantal-kindermenu-$i"] != "" && $_POST["aantal-kindermenu-$i"]!= 0) {
        $kindermenus .= $kindermenu[$i-1]["gerecht"] . ": " . $_POST["aantal-kindermenu-$i"] . "<br>";
        }
      }
      if ($kindermenus != "") {
        $kindermenus = "<h2><h2>Bestelde kindermenus:<hr></h2> <br>" . $kindermenus;
      }

      $pastas = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-pasta-$i"]) && $_POST["aantal-pasta-$i"] != "" && $_POST["aantal-pasta-$i"]!= 0) {
        $pastas .= $pasta[$i-1]["gerecht"] . ": " . $_POST["aantal-pasta-$i"] . "<br>";
        }
      }
      if ($pastas != "") {
        $pastas = "<h2>Bestelde pastas:<hr></h2> <br>" . $pastas;
      }

      $maaltijdsalade = "";
      for ($i = 1; $i <= 4; $i++) {
      if (isset($_POST["aantal-maaltijdsalades-$i"]) && $_POST["aantal-maaltijdsalades-$i"] != "" && $_POST["aantal-maaltijdsalades-$i"]!= 0) {
        $maaltijdsalade .= $maaltijdsalades[$i-1]["gerecht"] . ": " . $_POST["aantal-maaltijdsalades-$i"] . "<br>";
        }
      }
      if ($maaltijdsalade != "") {
        $maaltijdsalade = "<h2>Bestelde maaltijdsalades:<hr></h2> <br>" . $maaltijdsalades;
      }

      $dessert = "";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-desserts-$i"]) && $_POST["aantal-desserts-$i"] != "" && $_POST["aantal-desserts-$i"]!= 0) {
        $dessert .= $desserts[$i-1]["gerecht"] . ": " . $_POST["aantal-desserts-$i"] . "<br>";
        }
      }
      if ($dessert != "") {
        $dessert = "<h2>Bestelde desserts:<hr></h2> <br>" . $dessert;
      }

      $totaal = "<b>Totaal: </b>"  . " € " . number_format((float)$_POST["totaal"], 2, '.', '');

      $body = "<h2>Persoonlijke Gegevens<hr> </h2>" . "<b>Naam: </b>" . " " . $_POST["naam"] . " " . $_POST["voornaam"] .
              "<br><b>Adres: </b>" . $_POST["adres"] . " " . $_POST["nummer"] . " / " . $_POST["bus"] .
              "<br><b>           </b>" . $_POST["postcode"] . " " . $_POST["gemeente"] .
              "<br><b>E-mail: </b>" . $_POST["email"] . " " . "<br><b>Tel.</b>" . " " . $_POST["tel"] .

              "<br><h2>Aantal Personen en Tijdstip<hr> </h2>" . "<b>Aantal Personen: </b>" . " " . $_POST["aantal_personen"] . "<br>" . "<b>Tijdstip: </b>" . $_POST["tijdstip"] . "<br>" .

              $soep . "<br>" .
              $voorgerecht . "<br>" .
              $hoofdgerecht . "<br>" .
              $kindermenus . "<br>" .
              $pastas . "<br>" .
              $maaltijdsalade . "<br>" .
              $dessert . "<br>" .
              "<hr>" . "<hr>" .
              $totaal;


      $mail->Subject = 'Bestelling van' . " " . $_POST["naam"] . " " . $_POST["voornaam"];
      $mail->Body    = $body;

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo ' ';
      }

      ?>
      <?php //mail naar besteller
      $mail = new PHPMailer;

      //$mail->SMTPDebug = 3;                               // Enable verbose debug output

      $mail->isSMTP();                                      // Set mailer to use SMTP
      $mail->Host = 'smtp.gmail.com';                       // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'yannicktest.test@gmail.com';                 // SMTP username
      $mail->Password = 'cdowilrijk123456789';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to

      $mail->FromName = $_POST["email"];
      $mail->addAddress('yannicktest.test@gmail.com', 'Yannick');     // Add a recipient

      $mail->isHTML(true);                                  // Set email format to HTML

      $body = "<h2>Persoonlijke Gegevens<hr> </h2>" . "<b>Naam: </b>" . " " . $_POST["naam"] . " " . $_POST["voornaam"] .
              "<br><b>Adres: </b>" . $_POST["adres"] . " " . $_POST["nummer"] . " / " . $_POST["bus"] .
              "<br><b>           </b>" . $_POST["postcode"] . " " . $_POST["gemeente"] .
              "<br><b>E-mail: </b>" . $_POST["email"] . " " . "<br><b>Tel.</b>" . " " . $_POST["tel"] .

              "<br><h2>Aantal Personen en Tijdstip<hr> </h2>" . "<b>Aantal Personen: </b>" . " " . $_POST["aantal_personen"] . "<br>" . "<b>Tijdstip: </b>" . $_POST["tijdstip"] . "<br>" .

              $soep . "<br>" .
              $voorgerecht . "<br>" .
              $hoofdgerecht . "<br>" .
              $kindermenus . "<br>" .
              $pastas . "<br>" .
              $maaltijdsalade . "<br>" .
              $dessert . "<br>" .
              "<hr>" . "<hr>" .
              $totaal;


      $mail->Subject = 'Overzicht van uw bestelling';
      $mail->Body    = $body;

      if(!$mail->send()) {
          echo 'Message could not be sent.';
          echo 'Mailer Error: ' . $mail->ErrorInfo;
      } else {
          echo ' ';
      }

      ?>
    </div>
  </body>
</html>
