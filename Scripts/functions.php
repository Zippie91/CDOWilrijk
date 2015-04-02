<script>
function PrijsBerekening() {
	var totaal = 0;

	//Soepen
	<?php CalcVal($soepen, "soep"); ?>
	//Voorgerechten
	<?php CalcVal($voorgerechten, "voorgerecht"); ?>
	//Hoofdgerechten
	<?php CalcVal($hoofdgerechten, "hoofdgerecht"); ?>
	//Kindermenu
	<?php CalcVal($kindermenu, "kindermenu"); ?>
	//Pasta
	<?php CalcVal($pasta, "pasta"); ?>
	//Maaltijdsalades
	<?php CalcVal($maaltijdsalades, "maaltijdsalades"); ?>
	//Desserts
	<?php CalcVal($desserts, "desserts"); ?>
  //totaal
	$('#totaal').text( "€ " + totaal.toFixed(2) );
	$('#hiddentotaal').val( totaal );
}

</script>

<?php
// Calculate values of dishes, building the javascript
function CalcVal($array, $name) {
	for($i = 0; $i < sizeof($array); $i++) {
		echo "var val = 0;\n";
		echo "val = $('#aantal-" . $name . "-" . ($i + 1) . "').val() * " . $array[$i]["prijs"] . ";\n";
		echo "$('#totaal-" . $name . "-" . ($i + 1) . "').text('€ ' + val.toFixed(2));\n";
		echo "totaal += val;\n\n";
	}
}
?>
