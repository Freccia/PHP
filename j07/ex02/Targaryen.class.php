<?php

class Targaryen {

	public function resistsFire() {
		return FALSE;
	}

	public function getBurned() {
		if (static::resistsFire() === TRUE)
			return "emerges naked but unharmed";
		else
			return "burns alive";
	}

}

?>
