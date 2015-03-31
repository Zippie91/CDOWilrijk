<?php
if(isset($_POST['email'])) {
  $adres = $_POST['adres'] . " " . $_POST['nummer'];
  if($_POST['bus'] != "") {
    $adres .= " / " . $_POST['bus'];
  }
  ?>
  <h4>Contactgegevens</h4>
  <div class="col-xs-5">
    <p>
      <b>Naam</b><br>
      <b>Adres</b><br>
      <br>
      <b>Email</b><br>
      <b>Telefoon</b>
    </p>
  </div>
  <div class="col-xs-7">
    <p>
      <?php echo $_POST['voornaam'] . " " . $_POST['naam']; ?><br>
      <?php echo $adres; ?><br>
      <?php echo $_POST['postcode'] . " " . $_POST['gemeente']; ?><br>
      <?php echo $_POST['email']; ?><br>
      <?php echo $_POST['tel']; ?>
    </p>
  </div>
  <hr>
  <h4>Bestelling</h4>
  <div class="col-xs-5">
    <p>Aantal personen</p>
    <p>
      <b>Menu 1</b><br>
      <b>Menu 2</b><br>
    </p>
    <p>
      <b>Voorgerecht:</b><br>
      Tomaten met balletjes<br>
      Maatjes op een stok<br>
      <b>Hoofdgerecht:</b><br>
      Vol-au-vent met frietjes<br>
      Cordon blue met wortelpuree<br>
      <b>Dessert:</b><br>
      Chocoladecake<br>
      Crème brulée
    </p>
  </div>
  <div class="col-xs-7">
    <p><?php echo $_POST['aantal_personen']; ?></p>
    <p>
      <?php echo $_POST['menu1']; ?><br>
      <?php echo $_POST['menu2']; ?><br>
    </p>

  </div>
  <div class="clearfix"></div>
<?php } ?>
