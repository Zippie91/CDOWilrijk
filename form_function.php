<?php include ("_config.php"); ?>
<html lang='nl'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Don Bosco Wilrijk - Bedankt!</title>
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
        <p class="lead">Wij hebben uw bestelling ontvangen.<br>Na verwerking wordt uw bestelling nog eens bevestigd met juiste uur en betalingsgegevens.</p>
      </div>
      <?php
      include('mail2.php');
      ?>
      <footer class="footer">
        <p>Website created by Yannick en Raf</p>
      </footer>
    </div>
  </body>
</html>
