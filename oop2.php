<?php
	
	class hello
	{
		
		public function add($x,$y)
		{
			$z=$x+$y;
			return $z;
		}
	}

$world=new hello;
$y=$world->add(10,15);
echo $y;

?>