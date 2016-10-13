<?php

abstract class Fighter {

	abstract function fight();
	public $soldier_type;

	public function __construct($type){
		$this->soldier_type = $type;
	}

	public function getSoldierType() {
		return $this->soldier_type;
	}

	public function __clone() {
	}
}

?>
