<?php
/**
 * Description of LiveboardInput
 *
 * @author pieterc
 */
include_once("Input.php");
abstract class LiveboardInput extends Input{
     protected function makeLiveboard($station, $departures){
	  $lb= new APIList("liveboard");
	  $lb-> add($station);
	  $lb -> add($departures);
	  return $lb;
     }
     
     protected function makeNode($arrdep,$station,$platform, $vehicle, $time, $delay){
	  $n = new APIList($arrdep);
	  $n -> add($station);
	  $n -> add($platform);
	  $n -> add($vehicle);
	  $n -> add($time);
	  $n -> add($delay);
	  return $n;
     }
}
?>
