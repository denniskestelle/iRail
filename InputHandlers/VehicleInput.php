<?php

/**
 * Description of VehicleInput
 *
 * @author pieterc
 */
include_once("Input.php");
abstract class VehicleInput extends Input {
     protected function makeVehicleInformation($vehicle,$stops){
	  $vi = new APIList("vehicleinformation");
	  $vi -> add($vehicle);
	  $vi -> add($stops);
	  return $vi;
     }

     protected function makeStop($station,$time){
	  $stop = new APIList("stop");
	  $stop -> add($station);
	  $stop -> add($time);
     }
     
     
}
?>
