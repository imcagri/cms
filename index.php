<?php
	interface aPayment{
		public function setTotalAmount();
	}
	
	class garanti implements aPayment{
	
		public $price = null;
		
		public function __construct(){
			echo __CLASS__;
		}
		
		public function setTotalAmount(){
			$this->price = 3.20;
		}
	}
	
?>