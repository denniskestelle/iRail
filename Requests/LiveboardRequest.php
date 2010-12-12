<?php

/**
 * Description of LiveboardRequest
 *
 * @author pieterc
 */
include_once("Request.php");

class LiveboardRequest extends Request{
    private $station;
    private $date;
    private $time;
    private $arrdep;

    function __construct($station, $date, $time, $arrdep = "DEP", $lang = "EN", $format = "XML") {
        parent::__construct($format, $lang);
        $this->station = $station;
        $this->date = $date;
        $this->time = $time;
        $this->arrdep = $arrdep;
    }

    /**
     * This function serves as a factory method
     * It provides something with an input
     * @return Input
     */
    public function getInput(){
        if(parent::getCountry() == "nl"){
            return new NSLiveboardInput();
        }else if(parent::getCountry()=="be"){
            return new BRailLiveBoardInput();
        }else{
            return new NSLiveboardInput();
        }
    }

    public function getStation() {
        return $this->station;
    }

    public function getDate() {
        return $this->date;
    }

    public function getTime() {
        return $this->time;
    }

    public function getArrdep() {
        return $this->arrdep;
    }
    
}
?>
