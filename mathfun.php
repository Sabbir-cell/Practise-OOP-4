<?php
	$a=0101011011;
	echo bindec($a)."<br>";//binary to dec
	echo decbin($a)."<br>";// decimal to binary
	echo dechex($a)."<br>";//decimal to hexadecimal
	echo hexdec($a)."<br>";//hexaicimal to decimal
	echo sqrt(64)."<br>";// square root
	echo abs(-10)."<br>";//absulat

	$x=array(10,20,30);
	
	echo max($x)."<br>";
	echo min($x)."<br>";
	if (in_array(10,$x)) {
		echo "found";
	}
?>