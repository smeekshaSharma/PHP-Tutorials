<?php
   $str="This";
   echo $str ."<br>";
   $lenn=strlen($str);
   echo "Length is : ". $lenn .".Thank you <br>";
   echo "Number of words is : ". str_word_count($str) .".Thank you <br>";
   echo "Reversed String is ". strrev($str)."<br>";
   echo "The search for is in this string is ". strpos($str,"is")."<br>";
   echo "The replaced string is ".str_replace("is","at",$str)."<br>";
?>