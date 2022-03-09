<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        .error {color: #FF0000;}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$name = $email = $gender = $comment = $website = "";
$nameErr = $emailErr = $genderErr= "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // $name=$_POST["name"];
//         $nameErr = $emailErr = $genderErr = $websiteErr = "";
// $name = $email = $gender = $comment = $website = "";
//         $email=$_POST["name"];
//         $website=$_POST["name"];
//         $comment=$_POST["comment"];
//         $gender=$_POST["gender"];
        if(empty($_POST["name"])){
            $nameErr="Name is required";
        }else{
         $name=test_input($_POST["name"]);   
        }
        if(empty($_POST["email"])){
            $emailErr="Email is required";
        }else{
         $email=test_input($_POST["email"]);   
        }
        if (empty($_POST["website"])) {
            $website = "";
          } else {
            $website = test_input($_POST["website"]);
          }
        
          if (empty($_POST["comment"])) {
            $comment = "";
          } else {
            $comment = test_input($_POST["comment"]);
          }
        if(empty($_POST["gender"])){
            $genderErr="Gender is required";
        }else{
         $gender=test_input($_POST["gender"]);   
        }

    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <form action="/cwh/form_validation.php" method="post">
        Name:
        <input type="text" name="name">
        <span class="error"><?php echo $nameErr; ?></span><br>
        Email:
        <input type="text" name="email">
        <span class="error"><?php echo $emailErr; ?></span><br>
        Website:
        <input type="text" name="website"><br>
       
        Comment:
        <textarea name="comment" rows="5" cols="30"></textarea><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <span class="error"><?php echo $genderErr; ?></span><br>
        <input type="submit" name="submit" value="submit">

    </form>
 <?php
    
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>
</body>
</html>