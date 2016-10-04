#!/usr/bin/php

<?PHP

function is_alpha($c)
{
	if ((ord($c) >= 65 && ord($c) <= 90) || (ord($c) >= 97 && ord($c) <= 122))
		return true;
	return false;

}

function set_values(&$a)
{
	$len = count($a);
	$i = -1;
	while (++$i < $len)
	{
		if (is_alpha($a[$i]))
		{
			echo $a[$i]." is Alpha -> ".(ord($a[$i]) + 2000)."\n";
			$a[$i] = ord($a[$i]) + 2000;
		}
		else if (is_numeric($a[$i]))
		{
			echo $a[$i]." is Numeric -> ".(ord($a[$i]) + 1500)."\n";
			$a[$i] = ord($a[$i]) + 1500;
		}
		else
		{
			echo $a[$i]." is Other -> ".(ord($a[$i]) + 1000)."\n";
			$a[$i] = ord($a[$i]) + 1000;
		}
	}
	echo "\n";
	return $a;
}

function my_sort($s1, $s2)
{
	echo "S1 :: ".$s1."\n";
	echo "S2 :: ".$s2."\n";
	$s1	= strtolower($s1);
	$s2 = strtolower($s2);
	$s1 = str_split($s1);
	$s2 = str_split($s2);
	set_values($s1);
	set_values($s2);

//	print_r($s1);
//	print_r($s2);

	if ($s1 == $s2)
	{
		echo "Return 0\n\n";
		return 0;
	}
	$i = count($s1);	
	$j = count($s2);
	$k = 0;
	while ($k < $i && $k < $j)
	{
		if ($s1[$k] > $s2[$k])
		{
			echo $s1[$k]." > ".$s2[$k]." return -1\n\n";
			return -1;
		}
		++$k;
	}
	echo "Return 1\n\n";
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

print_r($splitted);

usort($splitted, "my_sort");
ft_print_array($splitted);

?>
