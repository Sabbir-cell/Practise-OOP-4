<?php
	/*$x=0;
	for ($i=1; $i <5 ; $i+=2) { 
		$x=$x+$i;
	}
	echo $x." ,";*/

	$a=array(1,2,3,4,5,6);
	$c=0;
		foreach ($a as $d) {
			if ($d%2!=0) {
				$c=$c+$d;

			}

		}echo $c;


?>
