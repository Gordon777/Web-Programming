<?php 
	function penGenerator($item = "banana"){
		return $item."pen<br>";
	}

	echo "I love" . penGenerator("apple");
	echo "I don't love" . penGenerator("pieapple");
	echo penGenerator();
?>