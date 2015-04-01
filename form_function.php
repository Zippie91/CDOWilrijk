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
      $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
      $mail->SMTPAuth = true;                               // Enable SMTP authentication
      $mail->Username = 'yannicktest.test@gmail.com';                 // SMTP username
      $mail->Password = '';                           // SMTP password
      $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
      $mail->Port = 465;                                    // TCP port to connect to

      $mail->From = 'from@example.com';
      $mail->FromName = $_POST["email"];
      $mail->addAddress('yannicktest.test@gmail.com', 'Yannick');     // Add a recipient
      $mail->addAddress('');               // Name is optional
      $mail->addReplyTo('info@example.com', 'Information');

      $mail->isHTML(true);                                  // Set email format to HTML

      //fill soup variable

      $soep = "<h2>Bestelde soepen<hr></h2> <br>";
      for ($i = 1; $i <= 3; $i++) {
      if (isset($_POST["aantal-soep-$i"]) && $_POST["aantal-soep-$i"] != "" && $_POST["aantal-soep-$i"]!= 0) {
        $soep .= $soepen[$i-1]["gerecht"] . ": " . $_POST["aantal-soep-$i"] . "<br>";
        }
      }
      $body = "<h2>Persoonlijke Gegevens<hr> </h2>" . "<b>Naam: </b>" . " " . $_POST["naam"] . " " . $_POST["voornaam"] .
              "<br><b>Adres: </b>" . $_POST["adres"] . " " . $_POST["nummer"] . " / " . $_POST["bus"] .
              "<br><b>           </b>" . $_POST["postcode"] . " " . $_POST["gemeente"] .
              "<br><b>E-mail: </b>" . $_POST["email"] . " " . "<br><b>Tel.</b>" . " " . $_POST["tel"] .

              "<br><h2>Aantal Personen en Tijdstip<hr> </h2>" . "<b>Aantal Personen: </b>" . " " . $_POST["aantal_personen"] . "<br>" . "<b>Tijdstip: </b>" . $_POST["tijdstip"] . "<br>" .

              $soep .
/*
              "<br><h2>Bestelde soepen: </h2>" . "<b>Wortel/kokossoepje met curry en koriander: </b>" . " " . $_POST["aantal-soep-1"] .
              "<br><b>Basilicumsoepje met tartaar van mozzarella en tomaat: </b>" . $_POST["aantal-soep-2"] .
              "<br><b>Tomatenvelouté met balletjes: </b>" . $_POST["aantal-soep-3"] .
*/
              "<br><h2>Bestelde voorgerechten: </h2>" . "<b>Carpaccio van sint-jacobsvruchten met tuinkruiden en limoendressing: </b>" . " " . $_POST["aantal-voorgerecht-1"] .
              "<br><b>Huisgemaakte geitenkaaskroketjes met een fris slaatje: </b>" . $_POST["aantal-voorgerecht-2"] .
              "<br><b>Vers geplukte lenteblaadjes met gevulde zalmbonbon: </b>" . $_POST["aantal-voorgerecht-3"] .

              "<br><h2>Bestelde hoofdgerechten: </h2>" . "<b>Scampi's met appel/ananas/banaan/curry/kokossausje en wilde rijst: </b>" . " " . $_POST["aantal-hoofdgerecht-1"] .
              "<br><b>Duo van tong en zalm, geparfumeerd met saffraan, grijze garnaaltjes, bieslookpuree: </b>" . $_POST["aantal-hoofdgerecht-2"] .
              "<br><b>Gegrilde tournedos met gemengd slaatje, handgesneden frietjes, saus naar keuze: </b>" . $_POST["aantal-hoofdgerecht-3"] .
              "<br><b>Stoofpotje van rundvlees met trappist en rozijntjes, verse frietjes: </b>" . $_POST["aantal-hoofdgerecht-4"] .

              "<br><h2>Bestelde kindermenu(s): </h2>" . "<b>Minihamburger met frietjes: </b>" . " " . $_POST["aantal-kindermenu-1"] .

              "<br><h2>Bestelde Pasta's: </h2>" . "<b>Lasagne met gegrilde groenten: </b>" . " " . $_POST["aantal-pasta-1"] .
              "<br><b>Pasta pesto met huisbereide zuiderse gehaktballetjes met feta en zongedroogde tomaatjes: </b>" . $_POST["aantal-pasta-2"] .
              "<br><b>Tagliatelle met kip 'Hawaï': </b>" . $_POST["aantal-pasta-3"] .

              "<br><h2>Bestelde Maaltijdsalades: </h2>" . "<b>Salade met kippenreepjes in een krokant jasje geparfumeerd met een zuiderse mangodressing: </b>" . " " . $_POST["aantal-maaltijdsalades-1"] .
              "<br><b>Lentepluksels met knapzakje van geitenkaas, krokante spekjes en Granny Smith: </b>" . $_POST["aantal-maaltijdsalades-2"] .
              "<br><b>Slaatje met gebakken kippenlevertjes, spekjes en croutons met een lichte toets van frambozen: </b>" . $_POST["aantal-maaltijdsalades-3"] .
              "<br><b>Verfrissend slaatje met scampi en appel met een currydressing: </b>" . $_POST["aantal-maaltijdsalades-4"] .

              "<br><h2>Bestelde Desserts: </h2>" . "<b>Tiramisu met speculoos: </b>" . " " . $_POST["aantal-desserts-1"] .
              "<br><b>Chocolademoussetaartje: </b>" . $_POST["aantal-desserts-2"] .
              "<br><b>Gevarieerd dessertbord 'Keukenrebellen': </b>" . $_POST["aantal-desserts-3"] .

              "<hr>" .

              "<br><h2>Totaal bedrag: </h2>" . " " . $_POST["totaal"] . "<br><h2>Betalingswijze: </h2>" . " " . $_POST["betaling"];


      $mail->Subject = 'Bestelling van' . " " . $_POST["naam"] . " " . $_POST["voornaam"];
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
