<?PHP

function ft_is_sort($a)
{
	$sorted = $a;
	sort($sorted);
	return $a == $sorted;
}

?>
