<?php
$temp=123;

//&& operator
/*if($temp>=0 && $temp<=30){
    echo "the weather is good";
}
else{
    echo"the weather is bad";
}*/

//|| operator
/*if($temp<0 || $temp>30){
    echo"the weather is bad";
}else{
    echo"the weather is good";
}*/

//! operator
if(!$temp>30 ){
    echo"the weather is bad";
}else{
    echo"the weather is good";
}
?> 