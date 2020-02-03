<?php
class Zones extends Database {
	
	// Show zones on a continent.  Takes continent name (encoded).
	function ShowAllByContinent($continent) {
		
		$thisContinent = urldecode($continent);
		
		$response=array();
		$result = $this->Query("SELECT * FROM zones WHERE zoneContinent = '$thisContinent'");
		while($zoneData = mysqli_fetch_array($result)) {
			$response[]=$zoneData;
		}
				
		header('Content-Type: application/json');
		echo json_encode($response);		
		
	}
	
	
	// Show zone data.  Takes zone name (encoded).
	function ShowZoneData($zone) {
		$thisContinent = urldecode($continent);
		$thisZone = urldecode($zone);
		
		$result = $this->Query("SELECT * FROM zones WHERE zoneName = '$thisZone' ");
		while ($zoneData = mysqli_fetch_array($result)) {
			$response[] = $zoneData;
		}
		
		header('Content-Type: application/json');
		echo json_encode($response);
		
	}
	
	
	// Find zones in a level range.  Takes min and max level.
	function ShowZonesByLevelRange($minLevel,$maxLevel) {
		$minLevel = intval($minLevel);
		$maxLevel = intval($maxLevel);
		
		$result = $this->Query("SELECT * FROM zones WHERE zoneLevelMin >= '$minLevel' AND zoneLevelMax <= '$maxLevel' ");
		while ($zoneData = mysqli_fetch_array($result)) {
			$response[] = $zoneData;
		}
			   
		header('Content-Type: application/json');
		echo json_encode($response);	   
	}
	
	
	// Response helper function
	function CreateResponse($status,$message) {
		$response = array(
			'status' => $status,
			'statusMessage' => $message
		);
		return $response;
	}
	
}


$zones = new Zones();