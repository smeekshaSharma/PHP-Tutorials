<?php
echo "Welcome <br>";
/*
Ways to conect to a MySql Database 
1.MySqlI Extension
2.PDO
*/
//Connecting to the Database
$servername="localhost";
$username="root";
$password="birth2062000";


//**Create a connection**
$conn=mysqli_connect($servername,$username,$password);

//Die if conn not successful
if(!$conn){
    die("Sorry failed to connect: ".mysqli_connect_error());
}

echo "Connection successful";



//***Create a db***
$sql="CREATE DATABASE dbHarry3";
$result = mysqli_query($conn,$sql);//to execute query

//Check db creation success
if($result){
    echo "The db was created successfully!";
}
else{
    echo "The db was not created successfully because of error-->".mysqli_error($conn);
}
echo "The result is ";
echo var_dump($result);
echo "<br>";



?>