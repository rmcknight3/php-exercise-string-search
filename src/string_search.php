<?php

function string_search($haystack,$needle){
	error_reporting(0);//diable PHP error warning for empty value

	if((strpos($haystack, $needle))==FALSE OR (empty($needle)))
	{
		echo "String not found.<br>(return false)";
		return false;
	}
	else
	{
		echo "Found '" . $needle . "' at index " . strpos($haystack, $needle) . "<br>(true)";
	}
}

string_search("chicago","go");
?>


















