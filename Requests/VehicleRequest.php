<?php
/**
 * Description of VehicleRequest
 *
 * @author pieterc
 */
ini_set("include_path", ".:../:api/DataStructs:DataStructs:../includes:includes");

include_once("Request.php");
include_once("InputHandlers/NSVehicleInput.php");
include_once("InputHandlers/BRailVehicleInput.php");
class VehicleRequest extends Request {
    private $vehicleId;
    function __construct($vehicleId, $lang = "EN", $format = "xml") {
        parent::__construct($format, $lang);
        $this-> vehicleId = $vehicleId;
    }

    public function getVehicleId() {
        return $this->vehicleId;
    }

    /**
     * This function serves as a factory method
     * It provides something with an input
     * @return Input
     */
    public function getInput(){
            return new BRailVehicleInput();
    }

}
?>
