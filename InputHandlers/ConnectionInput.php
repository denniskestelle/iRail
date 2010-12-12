<?php
/**
 * Description of ConnectionInput
 *
 * @author pieterc
 */
include_once("Input.php");
include_once("../../DataStructs/APIObject.php");
include_once("../../DataStructs/APIList.php");
abstract class ConnectionInput extends Input {

     protected function makeStation($hafasId){
	  //get station from Station Input handlers from database
//TODO
	  return new APIList("station");
     }
     
     protected function makeConnection($departure, $arrival, $duration, $vias){
	  $connection = new APIList("connection");
	  $connection -> add($departure);
	  $connection -> add($arrival);
	  $connection -> add($duration);
	  $connection -> add($vias);
	  return $connection;
     }

     protected function makeVia($departure,$arrival,$station){
	  $via = new APIList("via");
	  
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
