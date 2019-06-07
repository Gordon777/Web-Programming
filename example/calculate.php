<?php
	$int1 = 1;
	$int2 = 2;
	$str1 = "1bc";
	$str2 = "2";
	$float1 = 1.23;
	$float2 = 2.34;

	echo "\$int1+\$int2 = " . ($int1+$int2) ."<br>";//int+int
	echo "\$str1+\$str2 = " . ($str1+$str2) ."<br>";//str+str
	echo "\$int1+\$str2 = " . ($int1+$str2) ."<br>";//int+str
	echo "\$float1+\$float2= ". ($float1 + $float2) ."<br>";//float+float
	echo "\$float1+\$int2= ". ($float1 + $int2) ."<br>";//float+int
	echo "\$float1+\$str2= ". ($float1 + $str2) ."<br>";//float+str
	echo "\$int1.\$int2 = " . ($int1.$int2) ."<br>";//int.int
	echo "\$int1.\$str2 = " . ($int1.$str2) ."<br>";//int.str
	echo "\$int1.\$float2 = " . ($int1.$float2) ."<br>";//int.float

?>