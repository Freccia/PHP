#!/usr/bin/php
<?PHP

function grab_image($url, $saveto){
	$ch = curl_init ($url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_BINARYTRANSFER,1);
	$raw = curl_exec($ch);
	curl_close ($ch);
	if(file_exists($saveto)){
		unlink($saveto);
	}
	$fp = fopen($saveto,'x');
	if ($fp == NULL)
	{
		echo "Failed opening new file\n";
		exit(1);
	}
	fwrite($fp, $raw);
	fclose($fp);
}

if ($argc != 2)
	exit(1);

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "$argv[1]");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$page = curl_exec($ch);


if (preg_match("@\/[^\/]+$@", $argv[1], $dir))
{
	$dirname = $dir[0];
	$dirname = preg_replace("@\/@", "./", $dirname);
}
else
	$dirname = "./" . $argv[1];
$dirname = preg_replace("/http[s]{0,1}:\/\//", "", $dirname);

if (!file_exists($dirname))
	mkdir($dirname, 0777, true);
echo "DIR:" . $dirname . "\n";


preg_match_all("/(<img )(src=\"(.*?))(>)/si", $page, $img);

$i = -1;
while (++$i < count($img[2]))
{
	preg_match_all("/src\=(?:\"|\')(.+?)(?:\"|\')(?:.+?)/", $img[2][$i], $LOL);
	$name = $dirname . "/" . basename($LOL[1][0]);
	grab_image($LOL[1][0], $name);
}

?>
