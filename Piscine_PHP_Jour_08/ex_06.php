<?php
function str_to_wordtab($str = NULL, $delim = NULL)
{
	if(!is_string($str) || !is_string($delim))
	{
		return;
	}
	$StrToTab = explode($delim, $str); // return str in tab without $delim
	return $StrToTab;
}
?>
