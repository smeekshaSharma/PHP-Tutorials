<?php
$servername="localhost";
$username="root";
$password="birth2062000";
$database="dbHarry3";

//**Create a connection**
$conn=mysqli_connect($servername,$username,$password,$database);

//Die if conn not successful
if(!$conn){
    die("Sorry failed to connect: ".mysqli_connect_error());
}

echo "Connection successful";

//Variables to be inserted into the table
$name="Vikrant";
$destination="Russia";

//Sql query to be executed
$sql="INSERT INTO `phptripone` (`name`, `dest`) VALUES ('$name', '$destination')";



$result = mysqli_query($conn,$sql);//to execute query

//Add a new trip entry to a trip table in the database.
if($result){
    echo "The record has been inserted successfully!";
}
else{
    echo "The record was not inserted successfully because of error-->".mysqli_error($conn);
}


?>