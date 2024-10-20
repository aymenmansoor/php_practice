<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="countdown.php" method="post">
        <label for="">enter a number to count down from:</label>
        <input type="text" name="counter"><br>
        <input type="submit" value="count">
    </form>
</body>
</html>
<?php
$count=$_POST["counter"];
for( $i=$count; $i>0;$i--){
    echo "{$i}<br>";
}
?>