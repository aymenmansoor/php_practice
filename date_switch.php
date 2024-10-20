<?php
// l --> day
// date()--> (y-m-d H:i:s) i->min 
$date=date('l');
$date="monday";
switch($date){
    case 'monday': echo"great";
    break;
    case 'tuesday': echo"good";
    break;
    case 'wednesday': echo"average";
    break;
    case 'thursday': echo"fine";
    break;
    case 'friday': echo"pass";
    break;
    case 'saturday': echo"fail";
    break;
    case 'sunday': echo"fun";
    break;
    default: echo"{$date} is not a valid grade";
}
?>