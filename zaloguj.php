<?php
require_once"connect.php";


$connect = @new mysqli ($host,$db_user,$db_password,$db_name);

$id = $_POST ['id'];
$name_first = $_POST ['name_first'];
$name_last = $_POST ['name_last'];
$value = $_POST ['value'];
$sql = "INSERT INTO users (user_id,name_first,name_last,date,pkt) VALUES 
('$id','$name_first','$name_last',now(),'$value')";
mysqli_query($connect,$sql);
header("Location: adam.html");







?>