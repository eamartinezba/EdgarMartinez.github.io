<?php
class MainMenu{
	
	private $nameMainMenu;
	private $Entity_nameEntity;
	private $orderMainMenu;
	private $descMainMenu;
	private $iconMainMenu;

	public function __construct($nameMainMenu, $Entity_nameEntity, $orderMainMenu, $descMainMenu, $iconMainMenu){
		$this->nameMainMenu=$nameMainMenu;
		$this->Entity_nameEntity=$Entity_nameEntity;
		$this->orderMainMenu=$orderMainMenu;
		$this->descMainMenu=$descMainMenu;
		$this->iconMainMenu=$iconMainMenu;
	}
	
	public function getNameMainMenu(){
		return $this->nameMainMenu;
	}
	
	public function getEntity_nameEntity(){
		return $this->Entity_nameEntity;
	}
	
	public function getOrderMainMenu(){
		return $this->orderMainMenu;
	}
	public function getDescMainMenu(){
		return $this->descMainMenu;
	}
	public function getIconMainMenu(){
		return $this->iconMainMenu;
	}
	public function __toString(){
		return $this->nameMainMenu.'-'.$this->Entity_nameEntity;
	}
	
	
}
?>