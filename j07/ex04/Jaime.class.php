<?php

class Jaime extends Lannister {

	public function with($who) {
		if (get_parent_class($who) !== 'Lannister')
		{
			return 'Let\'s do this.';
		}
		else if (get_class($who) === 'Cersei')
		{
			return 'With pleasure, but only in a tower in Winterfell, then.';
		}
		else
			return 'Not even if I\'m drunk !';
	}

}

?>
