<?php
$foods=array("ffgth","thstyh","tyrhtys","tiopu","ytddddddd");
array_push($foods,"kiwi");
//remove first element
array_shift($foods);
//removes last element
array_pop($foods);
echo count($foods);
$awe=array_reverse($foods);
foreach($awe as $asdf){
    echo $asdf. "<br>";
}
?>