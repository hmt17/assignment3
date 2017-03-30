<?php
 	// This is the file for the parent class
 
 	class ParentClass {
		 private $name; //name
		 private $stat; //stats score

		 public function __construct($nm, $st) {
			 $this->name   = $nm;
			 $this->stats  = $st;
		 }
		 public function getName() {
			 return $this->name;
		 }
		 public function getStats() {
			 return $this->stats;
		 }

		 public function __toString() {
			 $hero =  " " . $this->getName() . " has a hero score of " . $this->getStats() . " percent.";
			 return $hero;
		 } 
 }