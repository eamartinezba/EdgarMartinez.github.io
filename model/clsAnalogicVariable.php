<?php
class AnalogicVariable{
	private $idEntityAttribute;
	private $magnitudeAnalogicVariable;
	private $activeAnalogicVariable;

	public function __construct($idEntityAttribute,$magnitudeAnalogicVariable,$activeAnalogicVariable){
		$this->idEntityAttribute=$idEntityAttribute;
		$this->magnitudeAnalogicVariable=$magnitudeAnalogicVariable;
		$this->activeAnalogicVariable=$activeAnalogicVariable;
	}

	public function getIdEntityAttribute(){
		return $this->idEntityAttribute;
	}
	public function getMagnitudeAnalogicVariable(){
		return $this->magnitudeAnalogicVariable;
	}
	public function getActiveAnalogicVariable(){
		return $this->activeAnalogicVariable;
	}
}
?>