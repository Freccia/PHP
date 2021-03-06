#!/usr/bin/php
<?php

function third_handler($matches)
{
	return ($matches[1] . strtoupper($matches[2]) . $matches[3]);
}

function second_handler($matches)
{
	return ($matches[1] . strtoupper($matches[2]) . $matches[3]);
}

function first_handler($matches)
{
	$matches[0] = preg_replace_callback("/( title=\")(.*?)(\")/mi", 'second_handler', $matches[0]);
	$matches[0] = preg_replace_callback("/(>)(.*?)(<)/si", 'third_handler', $matches[0]);
	return $matches[0];	
}

if ($argc < 2 || !file_exists($argv[1]))
	exit();
$file = file_get_contents($argv[1]);
$file = preg_replace_callback("/(<a )(.*?)(>)(.*?)(<\/a>)/si", 'first_handler', $file);

echo $file;
?>
