<!DOCTYPE html>
<html lang='nl'>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Don Bosco Wilrijk - De Keukenrebellen</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/jumbotron_narrow.css">
    <link rel="stylesheet" href="CSS/main.css">
    <?php include("Scripts/config.php") ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <header class="header clearfix">
        <h1>Don Bosco Wilrijk</h1>
        <a href="https://www.facebook.com/events/972216926129512/"><img src="Images/banneractiviteit.png" /></a>
      </header>
      <div class="jumbotron">
        <h1>Don Bosco<br >De Keukenrebellen</h1>
        <p class="lead">Naar aanleiding van de opendeurdag kan je 's middags komen eten. De studenten van de keuken bereiden voor jullie een geweldig maal!</p>
        <a href="#form" id="navform" class="btn btn-lg btn-success">Bestel Hier! <i class="glyphicon glyphicon-chevron-down"></i></a>
      </div>
      <div class="row">
        <?php include("_form.html.php"); ?>
      </div>
      <footer class="footer">
        <p>Website created by Yannick en Raf</p>
      </footer>
    </div>
    <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="Scripts/functions.js"></script>
    <?php include("Scripts/functions.php"); ?>
    <script src="Scripts/application.js"></script>
  </body>
</html>
