<?php
class MenuList{
	
	private $id;
	private $desc;
	private $MainMenu_nameMainMenu;
	private $path;
	private $orderMenuList;
	private $iconMenuList;
	
	public function __construct($id, $MainMenu_nameMainMenu, $desc, $path, $orderMenuList, $iconMenuList){
		$this->id=$id;
		$this->MainMenu_nameMainMenu=$MainMenu_nameMainMenu;
		$this->desc=$desc;
		$this->path=$path;
		$this->orderMenuList=$orderMenuList;
		$this->iconMenuList=$iconMenuList;
	}
	
	public function getId(){
		return $this->id;
	}
	public function getMainMenu_nameMainMenu(){
		return $this->MainMenu_nameMainMenu;
	}
	
	public function getDesc(){
		return $this->desc;
	}
	
	public function getPath(){
		return $this->path;
	}
	public function getOrderMenuList(){
		return $this->orderMenuList;
	}

	public function getIconMenuList(){
		return $this->iconMenuList;
	}
	public function __toString(){
		return $this->id;
	}
	
	
}

?>