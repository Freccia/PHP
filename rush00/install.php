<?PHP

if (!file_exists("data_base"))
	mkdir("data_base", 0777);
if (!file_exists("data_base/commands.csv"))
	touch("data_base/commands.csv", 0777);
if (!file_exists("data_base/product.csv"))
	touch("data_base/product.csv", 0777);
if (!file_exists("private"))
	mkdir("private", 0744);
if (!file_exists("private/users"))
	touch("private/users", 0744);
if (!file_exists("private/admins"))
{
	$data = 'a:4:{i:0;a:7:{s:5:"login";s:5:"admin";s:4:"mail";s:15:"admin@admin.com";s:8:"password";s:128:"34f24f3ece8bbe260b704e92566ab7dfbafda988ad00a93111f569c91d5eeb13acfa12a1d2b9da630c400e9869b4e87c64d7796afd3935e7959ced6697beb542";s:9:"firstname";s:3:"LOL";s:8:"lastname";s:3:"LOL";s:11:"postal_code";s:8:"09876543";s:5:"phone";s:14:"09876543234567";}i:1;s:0:"";i:2;s:0:"";i:3;s:0:"";}';
	touch("private/admins", 0744);
	file_put_contents("private/admins", $data, FILE_APPEND);
}

?>
