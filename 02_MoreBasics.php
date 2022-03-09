<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<style>
    .container{
        max-width:80%;
        background-color:pink;
        margin:auto;
    }
    </style>
<body>
    <div class="container">
        This is a container
        <?php
$age=10;
echo "<br>";
if($age>10){
echo "You can go to party";
}
else{
echo "You can't go to party";
}
//Arrays
$languages=array("Python","C++","Php","NodeJS");
echo $languages[0];
echo "<br>";
echo count($languages);
//Loops
$a=0;
while ($a <= 10) {
    echo "<br>Value of a is: ";
    echo $a;
    $a++;
}
//Iterating arrays in PHP using while loop
$a=0;
while ($a < count($languages)) {
    # code...
    echo "<br>The value of languages is: ";
    echo $languages[$a];
    $a++;
}
//Iterating arrays in PHP using do while loop
$a=20;
do {
    # code...
    echo "<br>The value of a is: ";
    echo $a;
    $a++;
}while ($a < 10);$a=20;
//Iterating arrays in PHP using for loop
for ($a=0;$a < 10;$a++){
    # code...
    echo "<br>The value of a from for loop is: ";
    echo $a;
}
foreach($languages as $value){
    echo "<br>The value from for each is ";
    echo $value;
}
        ?>
</div>
</body>
</html>