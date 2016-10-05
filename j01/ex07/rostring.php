#!/usr/bin/php
<?PHP
function ft_split($str)
{
	if ($str == NULL)
		return NULL;
	$exploded = explode(" ", $str);
	$filtered = array_filter($exploded);	/* filters exploded array from NULL entries */
	$sliced = array_slice($filtered, 0);	/* reset all array keys in order */
	return $sliced;
}

function ft_main($ac, $av)
{
	if (($splitted = ft_split($av[1])) == NULL)
		return NULL;
	
	array_push($splitted, $splitted[0]);
	unset($splitted[0]);

	$len = count($splitted);
	$i = 0;
	while (++$i < $len)
	{
		echo "$splitted[$i] ";
	}
	echo "$splitted[$i]\n";
}

if ($argc > 1)
	ft_main($argc, $argv);
?>
