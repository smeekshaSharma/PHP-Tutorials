<?php
$servername="localhost";
$username="root";
$password="birth2062000";
$database="dbpractice";
$conn=mysqli_connect($servername,$username,$password,$database);
if(!$conn){
die("Sorry failed to connect--->".mysqli_connect_error());
}
else{
    echo "Connection successful!<br>";
}
// $sql="CREATE DATABASE dbPractice";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo "The db was created successfully!";
// }
// else{
//     echo "The db was not created successfully because of error-->".mysqli_error($conn);
// }
// $sql="CREATE TABLE `dbpractice`.`practiceone` ( `sno` INT NOT NULL AUTO_INCREMENT , `name` TEXT NOT NULL , `email` VARCHAR(30) NOT NULL , `phoneno` INT NOT NULL , PRIMARY KEY (`sno`)) ENGINE = InnoDB";
// $result=mysqli_query($conn,$sql);
// if($result){
//     echo "The table was created successfully!";
// }
// else{
//     echo "The table was not created successfully because of error-->".mysqli_error($conn);
// }
//Variables to be inserted into the table
// $name="Mukesh";
// $email="this@mukesh.com";
// $phoneno="8288979508";

// //Sql query to be executed
// $sql="INSERT INTO `practiceone` (`name`, `email`, `phoneno`) VALUES ('$name', '$email', '$phoneno')";



// $result = mysqli_query($conn,$sql);//to execute query

// //Add a new trip entry to a trip table in the database.
// if($result){
//     echo "The record has been inserted successfully!";
// }
// else{
//     echo "The record was not inserted successfully because of error-->".mysqli_error($conn);
// }
$sql="UPDATE `practiceone` SET `name` = 'Aman' WHERE `practiceone`.`sno` = 1";
$result = mysqli_query($conn,$sql);
if($result){
    echo "We update the record successfully";
}
else{
    echo "We could not update the record";
}

$sql="DELETE FROM `practiceone` WHERE `practiceone`.`sno` = 2";
$result = mysqli_query($conn,$sql);

if($result){
    echo "Delete Successfully";
}
else{
    echo "Not Deleted Successfully due to this error-->".mysqli_error($conn);
}
?>

