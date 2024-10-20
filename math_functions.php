<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="math_functions.php" method="post">
        <label for="">x:</label>
        <input type="text" name="x"><br>
        <label for="">y:</label>
        <input type="text" name="y"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
$x=$_POST["x"];
$y=$_POST["y"];
$total=null;
// absolute --> removes -ve sign
// $total=abs($x);
// $total=round($x);
// round--> round down
// $total=round($x);
// ceil--> round up
// $total=ceil($x);
// $total=pow($x , $y);
// $total=sqrt($x);
// $total=max($x,$y);
// $total=min($x,$y);
//$total=pi();//it will print pi value
$total=rand(2,8);
echo "$total";

?>