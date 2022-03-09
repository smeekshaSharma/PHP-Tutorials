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

$sql="SELECT * FROM `phptripone` WHERE `dest`='Bihar'";
$result = mysqli_query($conn,$sql);//to execute query

//Usage of where clause to fetch data from the database
$num=mysqli_num_rows($result);
echo $num." records found in database.";
echo "<br>";
$no=1;
if($num>0){
    while($row=mysqli_fetch_assoc($result)){
        //will execute until null
        // echo var_dump($row);
    
echo $no.". Hello ". $row['name']." Welcome to ".$row['dest'];
    echo "<br>";
    $no=$no+1;
    }
}

//Usage of WHERE CLAUSE TO UPDATE DATA
$sql="UPDATE `phptripone` SET `name` = 'FromBiharUpdated' WHERE `dest` = 'Bihar'";
$result = mysqli_query($conn,$sql);//to execute query
echo var_dump($result);//Returns True(1) / False(0)

$aff=mysqli_affected_rows($conn);
echo "<br>Number of affected rows:". $aff."<br>";

if($result){
    echo "We update the record successfully";
}
else{
    echo "We could not update the record";
}
?>