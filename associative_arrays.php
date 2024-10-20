<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associative_arrays.php" method="post">
        <label for="">enter a country</label><br>
        <input type="text" name="country"><br>
        <input type="submit" value="get capital">
    </form>
</body>
</html>
<?php
$capitals=array("USA"=>"Washington DC",
                "India"=>"New Delhi",
                "Japan"=>"Tokyo");
// echo $capitals["USA"] ."<br>";
// echo $capitals["Japan"] ;
 $capitals["china"]="Beijing";
// foreach($capitals as $key=>$value){
//     echo "{$key} = {$value} <br>";
// }
$cap=$capitals[$_POST["country"]];
echo"The capital is {$cap}";

?>