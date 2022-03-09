<?php

$servername="localhost";
$username="root";
$password="birth2062000";
$database="dbharry3";

$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
    die("Sorry we failed to connect". mysqli_connect_error());
}
else{
    echo "Connection successful<br>";
}

$sql="DELETE FROM `phptripone` WHERE `phptripone`.`dest` = 'Russia' LIMIT 3";
$result = mysqli_query($conn,$sql);//to execute query

$aff=mysqli_affected_rows($conn);
echo "<br>Number of affected rows:". $aff."<br>";

if($result){
    echo "Delete Successfully";
}
else{
    echo "Not Deleted Successfully due to this error-->".mysqli_error($conn);
}
?>