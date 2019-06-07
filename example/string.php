<?php
	$string = "Hello world!";

	echo strlen($string)."<br>";
	echo str_word_count($string)."<br>";
	echo strrev($string)."<br>";
	echo strpos($string,"world")."<br>";
	echo str_replace("world", "apple", $string);

?>