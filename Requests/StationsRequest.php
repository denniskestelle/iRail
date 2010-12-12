<?php
/**
 * Description of StationsRequest
 *
 * @author pieterc
 */
ini_set("include_path", ".:../:api/DataStructs:DataStructs:../includes:includes");

include_once("Request.php");
include_once("InputHandlers/NSStationsInput.php");
include_once("InputHandlers/BRailStationsInput.php");
class StationsRequest extends Request{

    function __construct($lang = "EN", $format = "XML") {
        parent::__construct($format, $lang);
    }

   /**
     * This function serves as a factory method
     * It provides something with an input
     * @return Input
     */
    public function getInput(){
//for now only show the BRail stations
	 return new BRailStationsInput();
	 
    }
}
?>
