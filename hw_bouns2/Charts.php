<?php
$servername = “140.113.3.3″;
$username = “root";
$password = “password";
$dbnamne = “mysql";
// Create connection
$conn = new mysqli($servername, $username, $password);
mysql_select_db($dbname,$conn);

// Check connection
if (!mysql_ping ($conn)) {
    if ($conn->connect_error) {
        die(“連線失敗！！Connection failed: " . $conn->connect_error);
    } else {
    echo “連線成功！ Connected successfully";
    }
    $conn->close();
} else {
   echo “無法連線….";
}
?>

