<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first php website
        <?php
        define('PI',3.14);
            echo "Hello world! This is printed using PHP";
            //Secret
            $var1=5;
            $var2=6;
            echo "<br> Value=";
            echo $var1 + $var2;
            //Operators in PHP
              echo "<h1>Comparison Operators</h1>";
              echo "The value of 1==4 is";
              echo var_dump(1==4);//vardump fxn used to tell variable value,type;
              //and(&&) or(||) xor !
              //Data Types in php
              //1.String
              //2.Integer
              //3.Float
              //4.Boolean
              //5.Array
              //6.Object
              echo PI;
              ?>
              </div>
</body>
</html>