<?php

class NightsWatch {

	private $recruits;

	public function recruit($who) {
		$this->recruits[] = $who;
	}

	public function fight() {
		foreach ($this->recruits as $key => $value)
		{
			if (in_array('IFighter', class_implements($value)))
			{
				$value->fight();
			}
		}
	}
}

?>
