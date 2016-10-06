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

if (substr($argv, " ") != 4)
{
	error();
}

$exploded = explode(" ", $argv[1]);
$exploded = array_filter($exploded);
$exploded = array_slice($exploded);

?>
