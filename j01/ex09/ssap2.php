#!/usr/bin/php
<?PHP

function is_alpha($c)
{
		return true;
	return false;

}

function get_val($char)
{
	$char = strtolower($char);
	$val = ord($char);
	if ($val == 0)
		return $val;
	if (($val < 48) || ($val >= 91 && $val <= 96) || ($val >= 123))
		$val += 1000;
	else if (is_numeric($char))
		$val += 100;
	return $val;
}

function my_sort($str1, $str2)
{
	if ($str1 == $str2)
		return 0;
	$s1 = str_split($str1, 1);
	$s2 = str_split($str2, 1);
	$len1 = count($s1);
	$len2 = count($s2);
	$i = 0;

	while ($i < $len1 && $i < $len2)
	{
		$val1 = get_val($s1[$i]);
		$val2 = get_val($s2[$i]);
		if ($val1 != $val2)
			return ($val1 < $val2) ? -1 : 1;
		++$i;
	}
	if ($i == $len1 && $i == $len2)
		return 0;
	if ($i == $len1)
		return -1;
	return 1;
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
	foreach ($splitted as $element)
	{
		echo $element."\n";
	}
}

unset($argv[0]);
$joined = ft_join($argv);
$splitted = ft_split($joined);

if ($splitted)
{
	usort($splitted, "my_sort");
	ft_print_array($splitted);
}

?>
