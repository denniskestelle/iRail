<?php
/**
 * This class has to be a provider for all Stations available
 *
 * @author pieterc
 */
ini_set("include_path", ".:../:api/DataStructs:DataStructs:api/:../includes:includes");
include_once("Input.php");

class StationsInput extends Input {

     public static function fetchStation(){
	  
     }

     public static function fetchStations(){
	  
     }
     
    public function execute() {
        $stations = array();
//TODO
        return $stations;
    }


/**
 * TODO: rewrite this function
 */
    public static function getStationFromId($id, $request) {
        throw new Exception("No station for station id found (getStationFromId)", 3);
    }

/**
 * TODO
 */
    public static function getStationFromName($name){
        throw new Exception("No station for name found (getStationFromId)", 3);
	 
    }
}
?>
