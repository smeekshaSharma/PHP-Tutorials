<?php
$a=98;//Gloabal variable scope outside the fxn
$b=9;

function printValue(){
    $a=97;//Local variable scope inside function
    
    //To access global variable inside function use 
    global $a,$b;//Give me access to this global variable
    
    $a=100;//Global variables are changed and this change is permanent even outside the function.
    $b=1000;

    echo "<br> The value of your variable a is $a and b is $b";
    //Will print 97 if we have given variable in local scope else 
    //throw error .Will not print 98

}
echo $a;
printValue();
echo "<br> The value of your variable a is $a and b is $b <br>";
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>