<?php

class Tyrion extends Lannister {

	public function with($who) {
		if (get_parent_class($who) !== 'Lannister')
		{
			return 'Let\'s do this.';
		}
		else
			return 'Not even if I\'m drunk !';
	}

}

?>
