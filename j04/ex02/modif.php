<?PHP

$ok = false;
if ($_POST['submit'] == "OK" && $_POST['newpw'])
{
	$login = $_POST['login'];
	$oldpw = hash('whirlpool', $_POST['oldpw']);
	$newpw = hash('whirlpool', $_POST['newpw']);
	$all_accounts = unserialize(file_get_contents("../private/passwd"));
	for ($i = 0; $i < count($all_accounts); ++$i)
	{
		if ($login == $all_accounts[$i]['login'])
		{
			if ($oldpw == $all_accounts[$i]['passwd'])
			{
				$ok = true;
				$all_accounts[$i]['passwd'] = $newpw;
				break;
			}
		}
	}
	if ($ok == true)
	{
		$serdb = serialize($all_accounts);
		file_put_contents("../private/passwd", $serdb);
	}
}
echo ($ok == true) ? "OK\n" : "ERROR\n";

?>
