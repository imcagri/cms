<?php
	interface aPayment{
		public function setTotalAmount();
		public function setKdv();
	}
	
	class payment{
		public $price  = null;
		protected $kdv = null;
		protected $amountToBePaid = null;
	}
	
	class garanti extends payment implements aPayment{
		
		public function __construct(){
			echo __CLASS__;
		}
		
		public function setTotalAmount($amount){
			$this->price = $amount;
		}
		
		public function setKdv($kdv){
			$this->kdv = $kdv;
		} 
		
		public function calcAmountToBePaid(){
			$this->amountToBePaid = $this->price * $this->kdv;
		}
	}
?>
