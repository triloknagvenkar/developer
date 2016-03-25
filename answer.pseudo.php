<?php
	function generateNameAppendNumber($name){
		$randomNumber = rand(6, 15);
		$output = $name." ".$randomNumber;
	}
	
	$name = "Trilok";
	$outputValue = generateNameAppendNumber($name);	
	echo $outputValue;

?>