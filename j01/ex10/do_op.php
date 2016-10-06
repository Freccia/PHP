#!/usr/bin/php
<?PHP

function ft_main($ac, $av)
{
	if ($ac != 4)
	{
		echo "Incorrect Parameters\n";
		return 0;
	}

	$res = NULL;
	$n1 = preg_replace("/\s+/", "", $av[1]);
	$op = preg_replace("/\s+/", "", $av[2]);
	$n2 = preg_replace("/\s+/", "", $av[3]);

	$n1 = intval($n1);
	$n2 = intval($n2);

	if ($op == '+')
		$res = $n1 + $n2;
	else if ($op == '-')
		$res = $n1 - $n2;
	else if ($op == '*')
		$res = $n1 * $n2;
	else if ($op == '/')
		$res = $n1 / $n2;
	else if ($op == '%')
		$res = $n1 % $n2;

	if ($res != NULL)
		echo "$res\n";
}

ft_main($argc, $argv);

?>
