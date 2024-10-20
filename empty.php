<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="empty.php" method="post">
        <label for="">username</label><br>
        <input type="text" name="username"><br>
        <label for="">password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="login" name="login"><br>
</form>
</body>
</html>
<?php

// $name="aymen";
// if(empty($name)){
//     echo"this var. is empty";
// }else{
//     echo"this var. is not empty";
// }
if(isset($_POST["login"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    if(empty($username)){
        echo"username is missing";
    }
    elseif(empty($password)){
        echo" password is missing";
    }
    else{
        echo"hello {$username}";
    }
}
// foreach($_POST as $key=>$value){
//     echo"{$key} = {$value}<br>";
// }
?>