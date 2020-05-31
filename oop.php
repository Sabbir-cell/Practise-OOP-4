<?php
	
	class language
	{
		public $name;
		
		function prnt($x)
		{
			$this->name=$x;
			echo $this->name;
		}
	}


$phplang=new language;
$phplang->prnt("I love PHP");

?>