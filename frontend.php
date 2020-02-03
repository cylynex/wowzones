<?php
include("includes/initialize.php"); 
?>

<form method="post" action="">

	<b>Continent</b><br>
	<select name="Continent" id="Continent" onchange="SetContinent();">
		<option value="%">Choose a Continent</option>
		<?php 
			$continents = $zones->GetContinentNames();
			foreach ($continents AS $c) {
				?><option value="<?php echo ($c['zoneContinent']);?>"><?php echo $c['zoneContinent'];?></option><?php
			}


		?>
	</select>

</form>



<div id="outputArea"></div>


<?php include("includes/footer.php"); ?>