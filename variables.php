<?php
$name="aymen ";
$age=20;
$email="aymen@gmail.com";
$gpa=4.4;
$price=43.53;
$online=true;
$employed=false;
echo "$name <br>";
echo "hello {$name}<br>";
echo "you are {$age} years old <br>";
echo"your email is: {$email} <br> ";
echo "your gpa is: {$gpa} <br>  ";
// if we enter $ like this ${$price}than it will give error
// echo "your pizza is${$price}";
// so the correct method is using escape sequence
echo "your pizza is \${$price}<br>";
// if the value is false it will not show anything and if its true it show give 1 as 1=true
echo"online status:{$online}<br>";
echo"employee status: {$employed}<br>";
?>