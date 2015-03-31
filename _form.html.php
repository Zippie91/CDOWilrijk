<a name="form"></a>
<form id="bestellingform" class="form-horizontal" action="form_function.php" method="POST">
  <legend>Persoonlijke gegevens</legend>
  <div class="form-group">
    <label for="voornaam" class="control-label col-xs-2">Voornaam</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="voornaam" name="voornaam" placeholder="Voornaam" required >
    </div>
    <label for="naam" class="control-label col-xs-1">Naam</label>
    <div class="col-xs-5">
      <input type="text" class="form-control" id="naam" name="naam" placeholder="Naam" required >
    </div>
  </div>
  <div class="form-group">
    <label for="email" class="control-label col-xs-2">Email</label>
    <div class="col-xs-4">
      <input type="email" class="form-control" name="email" id="email" email="email" placeholder="Email" required>
    </div>
    <label for="tel" class="control-label col-xs-1">Telefoon</label>
    <div class="col-xs-5">
      <input type="tel" class="form-control" id="tel" name="tel"  placeholder="Telefoonnummer" required>
    </div>
  </div>
  <div class="form-group">
    <label for="adres" class="control-label col-xs-2">Adres</label>
    <div class="col-xs-4">
      <input type="text" class="form-control" id="adres" name="adres" placeholder="Adres" required>
    </div>
    <label for="nummer" class="control-label col-xs-1">Nr.</label>
    <div class="col-xs-2">
      <input type="text" class="form-control" id="nummer" name="nummer" required>
    </div>
    <label for="bus" class="control-label col-xs-1">bus</label>
    <div class="col-xs-2">
      <input type="text" class="form-control" id="bus" name="bus">
    </div>
  </div>
  <div class="form-group">
    <label for="gemeente" class="control-label col-xs-2">Gemeente</label>
    <div class="col-xs-6">
      <input type="text" class="form-control" id="gemeente" name="gemeente" placeholder="Gemeente" required>
    </div>
    <label for="postcode" class="control-label col-xs-2">Postcode</label>
    <div class="col-xs-2">
      <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode" required>
    </div>
  </div>
  <div class="form-group">
    <div class="col-xs-6">
      <label for="aantal_personen" class="control-label col-xs-6">Aantal personen</label>
      <div class="col-xs-6">
        <input type="number" class="form-control" id="aantal_personen" name="aantal_personen" placeholder=0  min=0>
      </div>
    </div>
    <div class="col-xs-6">
      <label for="tijdstip" class="control-label col-xs-6">Tijdstip</label>
      <div class="col-xs-6">
        <select class="form-control" id="tijdstip" name="tijdstip" placeholder="Kies een tijdstip" required>
          <option>12u00</option>
          <option>13u00</option>
        </select>
      </div>
    </div>
  </div>
  <br>

  <div id="accordion" arai-multiselectable="true" role="tablist">
    <div id="headingSoepen" role="tab">
      <a class="clickout" data-toggle="collapse" data-parent="#accordion" href="#collapseSoepen" aria-expanded="true" aria-controls="collapseSoepen">
        <legend>Soepen<i class="glyphicon glyphicon-menu-up"></i></legend>
      </a>
    </div>
    <div id="collapseSoepen" class="collapse in" aria-labelledby="headingSoepen" role="tabpanel">
      <?php for($row = 0; $row < sizeof($soepen); $row++) { ?>
        <?php
        $gerecht = $soepen[$row]["gerecht"];
        $prijs = $soepen[$row]["prijs"];
        ?>
        <div class="form-group">
          <label for="aantal-soep-<?php echo $row + 1; ?>" class="control-label col-xs-6"><h4><?php echo $gerecht; ?></h4></label>
          <div class="col-xs-2">
            <input type="number" class="form-control" id="aantal-soep-<?php echo $row + 1; ?>" name="aantal-soep-<?php echo $row + 1; ?>" min=0 placeholder=0>
          </div>
          <div class="col-xs-2">
            <p class="control-label">€ <?php echo $prijs; ?></p>
          </div>
          <div class="col-xs-2">
            <span class="form-control" id="totaal-soep-<?php echo $row + 1; ?>">€ 0.00</span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div id="headingVoorgerechten" role="tab">
      <a class="collapsed clickout" data-toggle="collapse" data-parent="#accordion" href="#collapseVoorgerechten" aria-expanded="false" aria-controls="collapseSoepen">
        <legend>Voorgerechten<i class="glyphicon glyphicon-menu-down"></i></legend>
      </a>
    </div>
    <div id="collapseVoorgerechten" class="collapse" aria-labelledby="headingVoorgerechten" role="tabpanel">
      <?php for($row = 0; $row < sizeof($voorgerechten); $row++) { ?>
        <?php
        $gerecht = $voorgerechten[$row]["gerecht"];
        $prijs = $voorgerechten[$row]["prijs"];
        ?>
        <div class="form-group">
          <label for="aantal-voorgerecht-<?php echo $row + 1; ?>" class="control-label col-xs-6"><h4><?php echo $gerecht; ?></h4></label>
          <div class="col-xs-2">
            <input type="number" class="form-control" id="aantal-voorgerecht-<?php echo $row + 1; ?>" name="aantal-voorgerecht-<?php echo $row + 1; ?>" min=0 placeholder=0>
          </div>
          <div class="col-xs-2">
            <p class="control-label">€ <?php echo $prijs; ?></p>
          </div>
          <div class="col-xs-2">
            <span class="form-control" id="totaal-voorgerecht-<?php echo $row + 1; ?>">€ 0.00</span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div id="headingHoofdgerechten" role="tab">
      <a class="collapsed clickout" data-toggle="collapse" data-parent="#accordion" href="#collapseHoofdgerechten" aria-expanded="false" aria-controls="collapseSoepen">
        <legend>Hoofdgerechten<i class="glyphicon glyphicon-menu-down"></i></legend>
      </a>
    </div>
    <div id="collapseHoofdgerechten" class="collapse" aria-labelledby="headingHoofdgerechten" role="tabpanel">
      <?php for($row = 0; $row < sizeof($hoofdgerechten); $row++) { ?>
        <?php
        $gerecht = $hoofdgerechten[$row]["gerecht"];
        $prijs = $hoofdgerechten[$row]["prijs"];
        ?>
        <div class="form-group">
          <label for="aantal-hoofdgerecht-<?php echo $row + 1; ?>" class="control-label col-xs-6"><h4><?php echo $gerecht; ?></h4></label>
          <div class="col-xs-2">
            <input type="number" class="form-control" id="aantal-hoofdgerecht-<?php echo $row + 1; ?>" name="aantal-hoofdgerecht-<?php echo $row + 1; ?>" min=0 placeholder=0>
          </div>
          <div class="col-xs-2">
            <p class="control-label">€ <?php echo $prijs; ?></p>
          </div>
          <div class="col-xs-2">
            <span class="form-control" id="totaal-hoofdgerecht-<?php echo $row + 1; ?>">€ 0.00</span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div id="headingKindermenu" role="tab">
      <a class="collapsed clickout" data-toggle="collapse" data-parent="#accordion" href="#collapseKindermenu" aria-expanded="false" aria-controls="collapseSoepen">
        <legend>Kindermenu<i class="glyphicon glyphicon-menu-down"></i></legend>
      </a>
    </div>
    <div id="collapseKindermenu" class="collapse" aria-labelledby="headingKindermenu" role="tabpanel">
      <?php for($row = 0; $row < sizeof($kindermenu); $row++) { ?>
        <?php
        $gerecht = $kindermenu[$row]["gerecht"];
        $prijs = $kindermenu[$row]["prijs"];
        ?>
        <div class="form-group">
          <label for="aantal-kindermenu-<?php echo $row + 1; ?>" class="control-label col-xs-6"><h4><?php echo $gerecht; ?></h4></label>
          <div class="col-xs-2">
            <input type="number" class="form-control" id="aantal-kindermenu-<?php echo $row + 1; ?>" name="aantal-kindermenu-<?php echo $row + 1; ?>" min=0 placeholder=0>
          </div>
          <div class="col-xs-2">
            <p class="control-label">€ <?php echo $prijs; ?></p>
          </div>
          <div class="col-xs-2">
            <span class="form-control" id="totaal-kindermenu-<?php echo $row + 1; ?>">€ 0.00</span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div id="headingPasta" role="tab">
      <a class="collapsed clickout" data-toggle="collapse" data-parent="#accordion" href="#collapsePasta" aria-expanded="false" aria-controls="collapseSoepen">
        <legend>Pasta<i class="glyphicon glyphicon-menu-down"></i></legend>
      </a>
    </div>
    <div id="collapsePasta" class="collapse" aria-labelledby="headingPasta" role="tabpanel">
      <?php for($row = 0; $row < sizeof($pasta); $row++) { ?>
        <?php
        $gerecht = $pasta[$row]["gerecht"];
        $prijs = $pasta[$row]["prijs"];
        ?>
        <div class="form-group">
          <label for="aantal-pasta-<?php echo $row + 1; ?>" class="control-label col-xs-6"><h4><?php echo $gerecht; ?></h4></label>
          <div class="col-xs-2">
            <input type="number" class="form-control" id="aantal-pasta-<?php echo $row + 1; ?>" name="aantal-pasta-<?php echo $row + 1; ?>" min=0 placeholder=0>
          </div>
          <div class="col-xs-2">
            <p class="control-label">€ <?php echo $prijs; ?></p>
          </div>
          <div class="col-xs-2">
            <span class="form-control" id="totaal-pasta-<?php echo $row + 1; ?>">€ 0.00</span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div id="headingMaaltijdsalades" role="tab">
      <a class="collapsed clickout" data-toggle="collapse" data-parent="#accordion" href="#collapseMaaltijdsalades" aria-expanded="false" aria-controls="collapseSoepen">
        <legend>Maaltijdsalades<i class="glyphicon glyphicon-menu-down"></i></legend>
      </a>
    </div>
    <div id="collapseMaaltijdsalades" class="collapse" aria-labelledby="headingMaaltijdsalades" role="tabpanel">
      <?php for($row = 0; $row < sizeof($maaltijdsalades); $row++) { ?>
        <?php
        $gerecht = $maaltijdsalades[$row]["gerecht"];
        $prijs = $maaltijdsalades[$row]["prijs"];
        ?>
        <div class="form-group">
          <label for="aantal-maaltijdsalades-<?php echo $row + 1; ?>" class="control-label col-xs-6"><h4><?php echo $gerecht; ?></h4></label>
          <div class="col-xs-2">
            <input type="number" class="form-control" id="aantal-maaltijdsalades-<?php echo $row + 1; ?>" name="aantal-maaltijdsalades-<?php echo $row + 1; ?>" min=0 placeholder=0>
          </div>
          <div class="col-xs-2">
            <p class="control-label">€ <?php echo $prijs; ?></p>
          </div>
          <div class="col-xs-2">
            <span class="form-control" id="totaal-maaltijdsalades-<?php echo $row + 1; ?>">€ 0.00</span>
          </div>
        </div>
      <?php } ?>
    </div>
    <div id="headingDesserts" role="tab">
      <a class="collapsed clickout" data-toggle="collapse" data-parent="#accordion" href="#collapseDesserts" aria-expanded="false" aria-controls="collapseSoepen">
        <legend>Desserts<i class="glyphicon glyphicon-menu-down"></i></legend>
      </a>
    </div>
    <div id="collapseDesserts" class="collapse" aria-labelledby="headingDesserts" role="tabpanel">
      <?php for($row = 0; $row < sizeof($desserts); $row++) { ?>
        <?php
        $gerecht = $desserts[$row]["gerecht"];
        $prijs = $desserts[$row]["prijs"];
        ?>
        <div class="form-group">
          <label for="aantal-desserts-<?php echo $row+1; ?>" class="control-label col-xs-6"><h4><?php echo $gerecht; ?></h4></label>
          <div class="col-xs-2">
            <input type="number" class="form-control" id="aantal-desserts-<?php echo $row+1; ?>" name="aantal-desserts-<?php echo $row+1; ?>" min=0 placeholder=0>
          </div>
          <div class="col-xs-2">
            <p class="control-label">€ <?php echo $prijs; ?></p>
          </div>
          <div class="col-xs-2">
            <span class="form-control" id="totaal-desserts-<?php echo $row+1; ?>">€ 0.00</span>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
  <div class="panel panel-success col-xs-offset-9">
	<div class="panel-heading">
	<span class="panel-title"><b>Totaal:</b></span>
	</div>
	<div class="panel-body">
	<span id="totaal" name="totaal">€ 0.00</span>
	</div>
  </div>
  <div class="form_group">
    <hr>
    <label for="betalingswijze" class="control-label col-xs-3">Betalingswijze</label>
    <div class="form-group col-xs-9">
      <div class="radio col-xs-4">
        <label><input type="radio" name="betaling" value="Cash" checked>Cash</label>
      </div>
      <div class="radio col-xs-4">
        <label><input type="radio" name="betaling" value="Overschrijving">Overschrijving</label>
      </div>
    </div>
	  <input id="hiddentotaal" type="hidden" name="totaal" value="0">
    <button id="bestel" type="button" class="btn btn-success col-xs-12" data-toggle="modal" data-target="#myModal">Bestellen</button>
    <br>
    <?php include("modal.php"); ?>
  </div>
</form>
