<?php
class MenuEntity{
	
	private $nameMenuEntity;
	private $descMenuEntity;
	private $orderMenuEntity;
	private $iconMenuEntity;

	public function __construct($nameMenuEntity, $descMenuEntity , $orderMenuEntity,$iconMenuEntity){
		$this->nameMenuEntity=$nameMenuEntity;
		$this->descMenuEntity=$descMenuEntity;
		$this->orderMenuEntity=$orderMenuEntity;
		$this->iconMenuEntity=$iconMenuEntity;
	}
	
	public function getNameEntity(){
		return $this->nameMenuEntity;
	}
	
	public function getDescEntity(){
		return $this->descMenuEntity;
	}
	
	public function getOrderEntity(){
		return $this->orderMenuEntity;
	}
	public function getIconEntity(){
		return $this->iconMenuEntity;
	}
	public function __toString(){
		return $this->nameMenuEntity.'-'.$this->descMenuEntity;
	}
	
	
}
?>