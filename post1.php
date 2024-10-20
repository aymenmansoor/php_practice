<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="post1.php" method="post">
        <label for="">quantity:</label>
        <input type="text" name="quantity"><br>
        <input type="submit"value=total>
    </form>
</body>
</html>
<?php
$item="burger";
$price=545.76;
$total;
$quantity=$_POST["quantity"];
$total=$quantity*$price;
echo"you have ordered {$quantity}  {$item}s<br> ";
echo "your total is: {$total}";
?>