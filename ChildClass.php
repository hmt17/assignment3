<?php 
	
 	class ChildClass extends ParentClass{
 		public $name; //name
 	    public $stats; //stats score
 	  
 	    public function __construct($name, $stats) {
 	        $this->name   = $name;
 	        $this->stats  = $stats;
    	}
    		
 	    public function compareStats($name1, $name2) {
		  if($name1.getStats() > $name2.getStats()) 
			  return $name1;
		  
		  else
			  return $name2;
 	    }
 	    
 	    public function __toString() {
     		return $parent = parent::__toString();
    	}
  	}