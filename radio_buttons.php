<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- if we want to select only one option than we have to put all the options in one group like name= credit -->
    <form action="radio_buttons.php" method="post">
        <input type="radio" name="credit" value="visa">visa<br>
        <input type="radio" name="credit" value="mastercard">mastercard<br>
        <input type="radio" name="credit" value="american express">american express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
$credit=null;
if(isset($_POST["credit"])){
    $credit=$_POST["credit"];
}
switch($credit){
    case "visa": echo"visa";
    break;
    case "mastercard": echo"mastercard";
    break;
    case "american express": echo"american express";
    break;
    default: echo"please make a selection";
}
?>