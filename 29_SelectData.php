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
$sql="SELECT * FROM `phptripone`";
$result = mysqli_query($conn,$sql);//to execute query

//find the number of records returned
$num=mysqli_num_rows($result);
echo $num." records found in database.";
echo "<br>";
if($num>0){
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row=mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    //We can fetch in a better way using while loop

    while($row=mysqli_fetch_assoc($result)){
        // echo var_dump($row);
    
echo $row['sno'].". Hello ". $row['name']." Welcome to ".$row['dest'];
    echo "<br>";
    }
}
?>
