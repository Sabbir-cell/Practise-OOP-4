<?php
	$a=1234567;
	echo bindec($a)."<br>";
	echo decbin($a)."<br>";
	echo dechex($a)."<br>";
	echo hexdec($a)."<br>";
	echo sqrt(144)."<br>";
	echo abs(45)."<br>";

	$x=array(100,78,900,56,4444,36000);
	echo max($x)."<br>";
	echo min($x)."<br>";

	if (in_array(900,$x)) {
		echo "found";
	}else{
		echo "not found";
	}

?>