#!/usr/bin/php
<?PHP
function ft_split($str)
{
	if ($str == NULL)
		return NULL;
	$exploded = explode(" ", $str);
	$filtered = array_filter($exploded); /* filters exploded array from NULL entries */
	sort($filtered);
	return $filtered;
}

function ft_join($av)
{
	$joined = NULL;

	foreach ($av as $element)
	{
		$joined .= " ".$element; /* Join all arguments in one str */
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
ft_print_array($splitted);
?>
