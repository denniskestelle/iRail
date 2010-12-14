<?php
/**
 * Description of ConnectionInput
 *
 * @author pieterc
 */
include_once("Input.php");
abstract class ConnectionInput extends Input {
     
     protected function makeConnection($departure, $arrival, $duration, $vias){
	  $connection = new APIList("connection");
	  $connection -> add($departure);
	  $connection -> add($arrival);
	  $connection -> add($duration);
	  $connection -> add($vias);
	  return $connection;
     }

     protected function makeVia($departure,$arrival,$station, $vehicle, $timebetween){
	  $via = new APIList("via");
	  $via -> add($departure);
	  $via -> add($arrival);
	  $via -> add($station);
	  $via -> add($vehicle);
	  $via -> add($timebetween);
	  return $via;
     }
     
     protected function makeViaNode($arrdep,$platform,$time){
	  $vianode = new APIList($arrdep);
	  $vianode -> add($platform);
	  $vianode -> add($time);
	  return $vianode;
     }     

     /**
      * This is an arrival or departure in connections
      */
     protected function makeTripNode($arrdep,$vehicle, $platform, $time, $station, $delay){
	  $tripnode = new APIList($arrdep);
	  $tripnode -> add($vehicle);
	  $tripnode -> add($platform);
	  $tripnode -> add($time);
	  $tripnode -> add($station);
	  $tripnode -> add($delay);
	  return $tripnode;
     }

}

?>
