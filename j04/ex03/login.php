<?PHP

include "auth.php";

$login = $_GET['login'];
$passwd = $_GET['passwd'];
session_start();
if (auth($login, $passwd) == TRUE)
{
	$_SESSION['loggued_on_user'] = array('login' => $login);
	echo "OK\n";
}
else
{
	$_SESSION = "";
	echo "ERROR\n";
}

?>
