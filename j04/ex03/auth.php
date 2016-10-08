<?PHP

function auth($login, $passwd)
{
	$pw_hash = hash("whirlpool", $passwd);
	$all_accounts = unserialize(file_get_contents("../private/passwd"));
	foreach ($all_accounts as $account)
	{
		if ($login == $account['login'] && $pw_hash == $account['passwd'])
			return TRUE;
	}
	return FALSE;
}

?>
