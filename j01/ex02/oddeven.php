#!/usr/bin/php

<?PHP

$stdin = fopen("php://stdin", "r");

while (1)
{
	echo "Entrez un nombre: ";
	$n = fgets($stdin);
	if ($n == NULL)
	{
		echo "\n";
		break;
	}
	$n = str_replace("\n", "", $n);
	if (!is_numeric($n))
		echo "'".$n."'"." n'est pas un chiffre\n";
	else if ($n % 2 == 0)
		echo "Le chiffre ".$n." est Pair\n";
	else if ($n % 2 != 0)
		echo "Le chiffre ".$n." est Impair\n";
}

?>
