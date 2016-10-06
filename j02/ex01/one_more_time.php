#!/usr/bin/php
<?PHP

function error()
{
	echo "Wrong Format\n";
	exit(1);
}

if ($argc != 2)
{
	exit(1);
}

if (substr_count($argv[1], " ") != 4)
{
	error();
}

$time = $argv[1];

$before = $time;
$time = preg_replace("/[Ll]undi/", "OK", $time);
$time = preg_replace("/[Mm]ardi/", "OK", $time);
$time = preg_replace("/[Mm]ercredi/", "OK", $time);
$time = preg_replace("/[Jj]eudi/", "OK", $time);
$time = preg_replace("/[Vv]endredi/", "OK", $time);
$time = preg_replace("/[Ss]amedi/", "OK", $time);
$time = preg_replace("/[Dd]imanche/", "OK", $time);
if ($before == $time)
	error();

$time = preg_replace("/^OK /", "", $time);

$before = $time;
$time = preg_replace("/[Jj]anvier/", "January", $time);
$time = preg_replace("/[Ff]evrier/", "February", $time);
$time = preg_replace("/[Mm]ars/", "March", $time);
$time = preg_replace("/[Aa]vril/", "April", $time);
$time = preg_replace("/[Mm]ai/", "May", $time);
$time = preg_replace("/[Jj]uin/", "June", $time);
$time = preg_replace("/[Jj]uillet/", "July", $time);
$time = preg_replace("/[Aa]out/", "August", $time);
$time = preg_replace("/[Ss]eptembre/", "September", $time);
$time = preg_replace("/[Oo]ctobre/", "October", $time);
$time = preg_replace("/[Nn]ovembre/", "November", $time);
$time = preg_replace("/[Dd]ecembre/", "December", $time);
if ($before == $time)
	error();

date_default_timezone_set("Europe/Paris");
$time_str = strtotime($time);
if (strlen($time_str) > 0)
	echo $time_str . "\n";
else
	error();

?>
