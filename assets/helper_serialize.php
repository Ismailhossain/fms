<?php

	foreach($_POST as $key => $value){
		if(is_array($value)) {
			echo $key.": ";
			print_r($value);
			echo "\n";
		} else {
			echo $key.": ".$value."\n";
		}
	};
	
?>