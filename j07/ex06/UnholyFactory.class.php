<?php

ini_set('display_errors', 1);
error_reporting(E_ERROR);

class UnholyFactory {

	private $absorbed = array();

	public function absorb ($type) {
		if ($type instanceof Fighter)
		{
			if (in_array($type, $this->absorbed))
			{
				print ('(Factory already absorbed a fighter of type ');
			}
			else
			{
				$this->absorbed[] = $type;
				print ('(Factory absorbed a fighter of type ');
			}
			print ($type->getSoldierType() . ')' . PHP_EOL);
		}
		else
			print ('(Factory can\'t absorb this, it\'s not a fighter)' . PHP_EOL);
	}

	private function get_request_class($request) {
		if ($request === 'foot soldier')
			return 'Footsoldier';
		else if ($request === 'archer')
			return 'Archer';
		else if ($request === 'assassin')
			return 'Assassin';
		else if ($request === 'llama')
			return 'Llama';
	}

	public function fabricate($request) {
		$request_class = $this->get_request_class($request);
		foreach ($this->absorbed as $key => $abs_class)
		{
			if (get_class($abs_class) === $request_class)
			{
				print ('(Factory fabricates a fighter of type ' . $request . ')' . PHP_EOL);
				return clone($this->absorbed[$key]);
			}
		}
		print ('(Factory hasn\'t absorbed any fighter of type ' . $request . ')' . PHP_EOL);
	}
}

?>
