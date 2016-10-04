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

function ft_join($array)
{
	$i = -1;
	$joined = NULL;
	$ac = count($array);

	if ($array == NULL)
		return NULL;
	while (++$i < $ac)
	{
		$joined .= $array[$i]." ";		/* Join all arguments in one str */
	}
	$joined = rtrim($joined);
	return $joined;
}

function ft_main($ac, $av)
{
	if (($splitted = ft_split($av[1])) == NULL)
		return NULL;
	$last = count($splitted) - 1;		/* Get last element */
	
	$tmp = $splitted[0];				/* SWAP */
	$splitted[0] = $splitted[$last];	/* SWAP */
	$splitted[$last] = $tmp;			/* SWAP */

	$joined = ft_join($splitted);		/* Join array entries in one str  */
	echo $joined."\n";
}

ft_main($argc, $argv);

?>
