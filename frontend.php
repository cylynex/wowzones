<?php
include("includes/initialize.php"); 
?>

<div>
Endpoints:<br>
/Continent/ - Shows all continents <br>
/Continent/{ContinentName}/ - Shows all Zones on that Continent <br>
/Continent/{ContinentName}/{ZoneName}/ - Shows data about that zone<br>
<br>
	
</div>

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
	
	<input type="submit" value="Go">

</form>



<div id="outputArea"></div>


<?php include("includes/footer.php"); ?>