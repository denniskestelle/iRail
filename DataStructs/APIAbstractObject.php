<?
/**
   * This is the abstract class that defines the functions for either a list or a concrete object
   *
   * @package DataStructs
   */
abstract class APIAbstractObject
{
     protected $key;
     //This returns the Key of the key value pair
     public function getKey(){
	  return $key;
     }
     
     //This function contains an APIAbstractObject
     public abstract function getValue();

};

?>