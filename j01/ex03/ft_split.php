<?PHP

function ft_split($str)
{
	if ($str == NULL)
		return NULL;
	$exploded = explode(" ", $str);
	$filtered = array_filter($exploded); /* filters exploded array from NULL entries */
	sort($filtered);
	return $filtered;
}
?>
