<?php
class RouteOperation{
	private $idRouteOperation;
	private $descRouteOperation;
	private $activeRouteOperation;

	public function __construct($idRouteOperation,$descRouteOperation,$activeRouteOperation){
		$this->idRouteOperation=$idRouteOperation;
		$this->descRouteOperation=$descRouteOperation;
		$this->activeRouteOperation=$activeRouteOperation;
	}

	public function getIdRouteOperation(){
		return $this->idRouteOperation;
	}
	public function getDescRouteOperation(){
		return $this->descRouteOperation;
	}
	public function getActiveRouteOperation(){
		return $this->activeRouteOperation;
	}
}
?>