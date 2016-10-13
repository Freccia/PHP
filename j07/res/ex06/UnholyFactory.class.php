<?php

class UnholyFactory {

	private $absorbed = array();

	public function absorb($soldier) {
		if ($soldier instanceof Fighter)
		{
			if (in_array($type, $this->absorbed))
			{
				print ('(Factory already absorbed a fighter of type ');
			}
			else
			{
				print ('(Factory absorbed a fighter of type ');
			}
			print ($type->getSoldierType() . ')' . PHP_EOL);
		}
		else
			print ('(Factory can\'t absorb this, it\'s not a fighter)');
	}

}

?>
