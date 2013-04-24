<?php
$string = 'Hello World';
for($i=strlen($string); $i>=0; $i--){
	$a=substr($string, $i);
	echo $a.strrev($a).'<br>';
}
?>