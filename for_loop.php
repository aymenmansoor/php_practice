<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="for_loop.php" method="post">
        <label for="">enter a number to count:</label>
        <input type="text" name="counter"><br>
        <input type="submit" value="count">
    </form>
</body>
</html>
<?php
$count=$_POST["counter"];
for( $i=1; $i<= $count;$i++){
    echo "{$i}<br>";
}
?>