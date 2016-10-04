#!/usr/bin/php

<?PHP

function is_alpha($c)
{
	if ((ord($c) >= 65 && ord($c) <= 90) || (ord($c) >= 97 && ord($c) <= 122))
		return true;
	return false;

}

function my_sort($s1, $s2)
{
	$s1 = strtolower($s1);
	$s2 = strtolower($s2);
	$s1 = str_split($s1);
	$s2 = str_split($s2);
	print_r($s1);
	echo "\n";
	print_r($s2);
	echo "\n";
}

function ft_split($str)
{
	if ($str == NULL)
		return NULL;
	$exploded = explode(" ", $str);
	$filtered = array_filter($exploded); /* filters exploded array from NULL entries */
	return array_slice($filtered, 0);
}

function ft_join($av)
{
	$joined = NULL;

	foreach ($av as $element)
	{
		$joined .= " ".$element; 		/* Join all arguments in one str */
	}
	return $joined;
}

function ft_print_array($splitted)
{
	if ($splitted != NULL)
	{
		foreach ($splitted as $element)
		{
			echo $element."\n";
		}
	}
}

unset($argv[0]);
$joined = ft_join($argv);
$splitted = ft_split($joined);

print_r($splitted);
if ($splitted)
	usort($splitted, "my_sort");
ft_print_array($splitted);

?>
