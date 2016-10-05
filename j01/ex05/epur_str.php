#!/usr/bin/php
<?PHP
function epur_str($str)
{
	$epur = ltrim($str);
	$epur = rtrim($epur);
	return ($epur);
}

echo epur_str($argv[1]);
echo "\n"
?>
