<?php 

require_once"connect.php";
$connect = @new mysqli ($host,$db_user,$db_password,$db_name);
$sql = "SELECT *FROM users;";
$result = mysqli_query($connect,$sql);

$resultCheck = mysqli_num_rows($result);

if($resultCheck>0){

for ($i=0;$i<$resultCheck;$i++){

$row = mysqli_fetch_array($result);
echo "<p><strong>".($i+1).". Numer indeksu: ";
 echo stripslashes($row["user_id"]);
 echo "</strong><br>Imie: ";
 echo stripslashes($row["name_first"]);
 echo "<br>Nazwisko: ";
 echo stripslashes($row["name_last"]); 
 echo "<br>Data testu : ";
 echo stripslashes($row['date']); 
 echo "<br>Punkty zdobyte : ";
 echo stripslashes($row['pkt']);


}



}







?>