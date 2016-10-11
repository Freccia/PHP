<?PHP
session_start()
?>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="css/index.css">
		<title> F.Awesome </title>
	</head>
	<body>
<?PHP
if (!$_SESSION['loggued_on_user'])
{
	echo "<form class='format' action='controllers/login.php' method='post'>
		Identifiant: <input type='text' name='mail' id='input'>
		<br/>
		Mot de passe: <input type='password' name='passwd' id='input'>
		<input id='submit' type='submit' name='submit' value='OK'>
		</form>";
}
else
{
	echo "<a class='format'> Connected as: " . $_SESSION['loggued_on_user'] . "</a>";
	echo "<br/>";
	echo "<a class='format' href='template/info.php'> Mes Informations</a>";
	echo "<br/>";
	if (!$_SESSION['admin'])
		echo "<a class='format' href='template/form_modif_user.php'> Modifier Informations</a>";
	else
		echo "<a class='format' href='template/form_modif_admin.php'> Modifier Informations</a>";
	echo "<br/>";
	echo "<a class='format' href='template/form_modif_pwd.php'> Modifier mot de passe</a>";
	echo "<br/>";
	echo "<a class='format' href='template/confirm_delete.php'> Effacer Compte</a>";
	echo "<br/>";
	if ($_SESSION['admin'])
	{
		echo "<a id='form' href='template/admin_page.php'>Admin Page</a>";
	}
}
?>
		<div id="header">
			<img id="logo" src="http://i.imgur.com/XXTjGRp.png" title="F.Awesome" alt="F.Awesome">
			<a href="">
				<img id="reload" src="resources/reload.png" title="Reload" alt="Recommencer au début">
			</a>
			<a href="controllers/logout.php">
				<img id="close" src="resources/close.gif" title="Logout" alt="Déconnecter">
			</a>
			<a href="">
				<img id="skateshit" src="http://i.imgur.com/ly7cFkI.png" title="Skateshit" alt="Skateshit">
			</a>
		</div>
		<div id="left">
				<a href="template/longboards.php">
					<img id="longboards" src="http://i.imgur.com/AjHcIC0.png" title="Longboards" alt="Longboards">
				</a>
				<a href="template/skateboards.php">
					<img id="skateboards" src="http://i.imgur.com/2xFOwm0.png" title="Skateboards" alt="Skateboards">
				</a>
				<a href="template/trucks.php">
					<img id="trucks" src="http://i.imgur.com/6YwxamH.png" title="Screws & Trucks" alt="Screws & Trucks">
				</a>
		</div>
		<div id="center">
		<img id="LONG" src="http://i.imgur.com/UAdVE8V.png" title="LOL" alt="LOL">
		</div>
		<div id="right">
			<img id="login" src="http://i.imgur.com/AGYWsSC.png" title="login" alt="login"/>
			<a href="template/form_register.php">
				<img id="register" src="http://i.imgur.com/vD1q0ZT.png" title="register" alt="register"/>
			</a>
			<a href="template/basket.php">
				<img id="basket" src="http://i.imgur.com/QwCafH4.png" title="basket" alt="basket"/>
			</a>
<?PHP
if (!$_SESSION['loggued_on_user'])
{
		echo "<a href='template/admin_login.php'>";
		echo "<img id='admin' src='resources/outil.png' title='Admin Page' alt='Admin Page'>";
		echo "</a>";
}
?>
		</div>
	</body>
</html>
