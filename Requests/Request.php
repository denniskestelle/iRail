<?php
  /**
   * This is an abstract class for a request to the API. It needs to be overridden for each different request
   * The only method that needs to be overriden is the getInput()
   * @author pieterc
   */
foreach (glob("OutputHandlers/*.php") as $file) {
     include_once $file;
}
abstract class Request {
     private $SUPPORTED_LANGUAGES = array("EN", "NL", "FR");
     private $SUPPORTED_OUTPUT = array("XML", "JSON", "JSONP", "YAML");

//
     private $format = "XML";
     private $lang = "EN";
     function __construct($format, $lang) {
	  $this->format = strtoupper($format);
	  $this->lang = strtoupper($lang);
     }

     /**
      *Should be rewritten to something more logical. Searching for the domainname's extension is crazy...
      * @return countrycode
      */
     public function getCountry() {
	  $expl = explode(".", $_SERVER["SERVER_NAME"]);
	  $country = $expl[sizeof($expl)-1];
	  if($country == "localhost"){ // added this line for testing locally
	       return "be";
	  }else if(strtoupper($country) == "COM"){
	       return "be";
	  }
	  return $country;
     }

     /**
      * This function serves as a factory method design pattern.
      */
     public abstract function getInput();
     
     public function getOutput($datastruct){
	  if(in_array($format,$SUPPORTED_OUTPUT)){
	       return new $format($datastruct, $this->lang);
	  }
     }
    
     public function getFormat() {
	  if(in_array($format,$SUPPORTED_OUTPUT)){
	       return strtoupper($this->format);
	  }
	  else{
	       return "XML";
	  }
     }

     public function getLang() {
	  if(in_array($this->lang, $this->SUPPORTED_LANGUAGES)){
	       return $this->lang;
	  }
	  return "EN";
     }
    
}
?>
