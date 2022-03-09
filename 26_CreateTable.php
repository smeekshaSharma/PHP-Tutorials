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
$database="dbHarry3";

//**Create a connection**
$conn=mysqli_connect($servername,$username,$password,$database);

//Die if conn not successful
if(!$conn){
    die("Sorry failed to connect: ".mysqli_connect_error());
}

echo "Connection successful";



//***Create a table in db***

$sql="CREATE TABLE `phptripone` ( `sno` INT(6) NOT NULL AUTO_INCREMENT , `name` VARCHAR(12) NOT NULL , `dest` INT(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn,$sql);//to execute query

//Check db creation success
if($result){
    echo "The table was created successfully!";
}
else{
    echo "The table was not created successfully because of error-->".mysqli_error($conn);
}


?>