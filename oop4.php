<?php
	
	class average
	{
		
		public function sum ($x,$y,$z)
		{
				$a=$x+$y+$z;
				$b=$a/3;
				return $b;
		}	
	}

$sabbir= new average;
$c=$sabbir-> sum(4,4,4);
echo $c;

?>

