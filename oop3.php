<?php
	
	class sabbir
	{
		
		public function add($b)
		{
			if ($b%2==0) {
				echo "even";
			}else{
				echo "odd";
			}
		}
	}

$biswas=new sabbir;
$biswas->add(30);


?>