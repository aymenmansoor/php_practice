<?php
$grade='C';
switch($grade){
    case 'A': echo"great";
    break;
    case 'B': echo"good";
    break;
    case 'C': echo"average";
    break;
    case 'D': echo"fine";
    break;
    case 'E': echo"pass";
    break;
    case 'F': echo"fail";
    break;
    default: echo"{$grade} is not a valid grade";
}
?>