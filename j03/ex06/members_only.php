<?PHP

$Image = "../img/42.png";
$Image_Data = base64_encode(file_get_contents($Image));

$LoginSuccessful = false;

$Username = $_SERVER['PHP_AUTH_USER'];
$Password = $_SERVER['PHP_AUTH_PW'];

if ($Username == "zaz" && $Password == "jaimelespetitsponeys"){
	$LoginSuccessful = true;
}

if (!$LoginSuccessful){
	header('WWW-Authenticate: Basic realm=\'\'Espace Membres\'\'');
	header('HTTP/1.0 401 Unauthorized');
	header('Content-Type: text/html');
	echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>";
}
else{
	echo "<html><body>\nBonjour Zaz<br />\n";
	echo "<img src='data:image/png;base64,$Image_Data'>\n";
	echo "</body></html>";

}

?>

