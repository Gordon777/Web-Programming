<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
<?php
    function addnum($num1,$num2){
    $sum=$num1+$num2;
        
    return $sum;    
    }
    
    $result=addnum(10,20);
    echo $result;
    echo "<br>";
    $result=addnum(50,$result);
    echo $result;
    
    ?>
    
</body>
</html>