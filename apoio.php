<?php 
function clean_data($value){
$value= trim($value);
$value=stripcslashes($value);
$value=htmlspecialchars($value);
return $value;
}
