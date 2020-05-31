<?php
	$x=array(

		array(2,4,6),
		array(1,2,3),
		array(7,8,9),
		);
	foreach ($x as $key => $value) {
		foreach ($value as $b => $c) {
			echo $c." ,";
		}
		echo "<br>";
	}





?>