<?php 
 #reverse string
$string = 'JAVATPOINT';
$length = strlen($string);
$revString = '';
for($i=$length-1; $i>=0; $i--){
    $revString .= $string[$i];
}
echo $revString;