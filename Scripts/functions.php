<script>
function PrijsBerekening() {
	var totaal = 0;
	//Soepen
	<?php for($i = 0; $i < sizeof($soepen); $i++){ ?>
		var val = 0;
		val = $("#aantal-soep-<?php echo $i+1; ?>").val() * <?php echo $soepen[$i]["prijs"];?>;
		$('#totaal-soep-<?php echo $i+1; ?>').text( "€ " + val.toFixed(2) );
		totaal += val;
	<?php } ?>

  	//Voorgerechten
	<?php for($i = 0; $i < sizeof($voorgerechten); $i++){ ?>
		var val = 0;
		val = $("#aantal-voorgerecht-<?php echo $i+1; ?>").val() * <?php echo $voorgerechten[$i]["prijs"];?>;
		$('#totaal-voorgerecht-<?php echo $i+1; ?>').text( "€ " + val.toFixed(2) );
		totaal += val;
	<?php } ?>

  	//Hoofdgerechten
	<?php for($i = 0; $i < sizeof($hoofdgerechten); $i++){ ?>
		var val = 0;
		val = $("#aantal-hoofdgerecht-<?php echo $i+1; ?>").val() * <?php echo $hoofdgerechten[$i]["prijs"];?>;
		$('#totaal-hoofdgerecht-<?php echo $i+1; ?>').text( "€ " + val.toFixed(2) );
		totaal += val;
	<?php } ?>

  	//Kindermenu
	<?php for($i = 0; $i < sizeof($kindermenu); $i++){ ?>
		var val = 0;
		val = $("#aantal-kindermenu-<?php echo $i+1; ?>").val() * <?php echo $kindermenu[$i]["prijs"];?>;
		$('#totaal-kindermenu-<?php echo $i+1; ?>').text( "€ " + val.toFixed(2) );
		totaal += val;
	<?php } ?>

  	//Pasta
	<?php for($i = 0; $i < sizeof($pasta); $i++){ ?>
		var val = 0;
		val = $("#aantal-pasta-<?php echo $i+1; ?>").val() * <?php echo $pasta[$i]["prijs"];?>;
		$('#totaal-pasta-<?php echo $i+1; ?>').text( "€ " + val.toFixed(2) );
		totaal += val;
	<?php } ?>

  	//Maaltijdsalades
	<?php for($i = 0; $i < sizeof($maaltijdsalades); $i++){ ?>
		var val = 0;
		val = $("#aantal-maaltijdsalades-<?php echo $i+1; ?>").val() * <?php echo $maaltijdsalades[$i]["prijs"];?>;
		$('#totaal-maaltijdsalades-<?php echo $i+1; ?>').text( "€ " + val.toFixed(2) );
		totaal += val;
	<?php } ?>

    //Desserts
	<?php for($i = 0; $i < sizeof($desserts); $i++){ ?>
		var val = 0;
		val = $("#aantal-desserts-<?php echo $i+1; ?>").val() * <?php echo $desserts[$i]["prijs"];?>;
		$('#totaal-desserts-<?php echo $i+1; ?>').text( "€ " + val.toFixed(2) );
		totaal += val;
	<?php } ?>

    //totaal
	$('#totaal').text( "€ " + totaal.toFixed(2) );
	$('#hiddentotaal').val( totaal );
}
</script>
