<?
/**
 * This is part of our datastruct model
 *
 * It is a final object of 
 *
 * @package DataStructs
 */
include_once "APIAbstractObject.php";
class APIObject extends APIAbstractObject{
     private $isAttr;
     private $value;

     public function __construct($key, $value, $isAttr = false){
	  parent::key = $key;
	  $this->value = $value;
	  $this->isAttr =$isAttr;
     }
     
     public function getValue(){
	  return $value;
     }
     //returns a boolean. Is a hack to be able to serve XML attributes
     public function isAttribute(){
	  return $isAttr;
     }
	
};


?>
