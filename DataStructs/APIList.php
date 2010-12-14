<?
/**
 * This is part of our datastruct model
 * 
 * It can be iterated over and contains a list of APIAbstractObjects.
 * For instance Station will be an APIList which contains
 * APIObjects: locationX locationY id and name
 *
 * @package DataStructs
 */
include_once("APIAbstractObject.php");
class APIList extends APIAbstractObject implements Iterator{
     //Array which contains APIAbstractObjects
     private $array = array();
     private $position = 0;
     private $size = 0;
     private $defaultKey;
     public function __construct($key, $array = null){
	  parent::key = $key;
	  $this->position = 0;
	  $this->size = 0;
	  $this->array = $array;
     }

     public function setDefaultKey($key){
	  $this->defaultKey = $key;
     }

/**
 * A default key is the key to the value that will be the XML tag's content
 * For instance for Station, this is name
 */
     public function getDefaultKey(){
	  return $this->defaultKey;
     }
     
     public function getSize(){
	  return $size;
     }

     public function add(APIAbstractObject $aao, $defaultKey = false){
	  if($defaultKey){
	       $this->defaultKey = $aao -> getKey();
	  }
	  $this->array[$size] = $aao;
	  $size ++;
     }

/**
 * This is an O(n) method! Try to avoid it!
 */
     public function getValue($key){
	  $i = 0;
	  while($i < $this->getSize() && strcmp($array[$i]->getKey(),$key) != 0){
	       $i++;
	  }
	  if($i < $this-> getSize()){
	       return $this->$array[$i];
	  }else if($i == $this->getSize && strcmp($array[$i]->getKey(),$key) == 0){
	       return $this->$array[$i]:     
	  }else{
	       return null; //throw Exception instead?
	  }
     }

     public function getValue(){
	  return $array;
     }

     function rewind() {
	  $this->position = 0;
     }

     function current() {
	  return $this->array[$this->position];
     }

     function key() {
	  return $this->position;
     }

     function next() {
	  $this->position++;
     }

     function valid() {
	  return isset($this->array[$this->position]);
     }
};




?>