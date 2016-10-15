<?php

ini_set('display_errors',1);
error_reporting(E_ERROR);

include('Greyjoy.class.php');

class Euron extends Greyjoy {
	public function announceMotto() {
		print($this->familyMotto . PHP_EOL);
	}
}

?>
