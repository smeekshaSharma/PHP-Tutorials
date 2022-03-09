<?php
    //   if( $_SERVER['REQUEST_METHOD'] == 'POST')
    if(isset($_POST['submit'])) 
     {
    $firstnum=$_POST['firstnum'];
    $secondnum=$_POST['secondnum'];

$sum=$firstnum+$secondnum;

echo "Sum =". $sum;
      }
    ?>