<?php 
	
	class StockIButton 
	{
		private $idStockIButton;
		private $statusStockIButton;
		private $hexIdIButton;
		function __construct($idStockIButton, $statusStockIButton,$hexIdIButton)
		{
			$this->idStockIButton=$idStockIButton;
			$this->statusStockIButton=$statusStockIButton;
			$this->hexIdIButton=$hexIdIButton;
		}

		public function getIdStockIButton(){
			return $this->idStockIButton;
		}
		public function getStatusStockIButton(){
			return $this->statusStockIButton;
		}
		public function getHexIdIButton(){
			return $this->hexIdIButton;
		}
		public function setStatusIButton($statusStockIButton){
			$this->statusStockIButton=$statusStockIButton;
		}
	}

?>