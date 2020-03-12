<?php

require "incl/phonics.php";

function phonicsCount($text,&$arr) {
	foreach ($arr as $key) {
		$vowelCount[$key]=0;
	}
	
	foreach (str_split($text) as $char) {
		foreach ($arr as $vowel) {
			if (strtoupper($vowel)==$char||strtolower($vowel)==$char){
			$vowelCount[$vowel]=$vowelCount[$vowel]+1;
			break;
			}
		}
	}
	
    return $vowelCount;
}

function noWhites($text,$mask = " \t\n\r\0\x0B") {
	$trimmed = trim ( $text,$mask );
	return strlen($trimmed);
}

//function noflines($text) {
//	return count(file($text)); 
//}
 
//$text = fopen("data/text.txt",'r') or die("Unable to open file!"); 
//$file = fopen("data/text.txt",'r');
$text = file_get_contents("data/text.txt",1);
//fseek("data/text.txt",1);

print_r($text);
print_r(phonicsCount($text,$vowels));

//print_r(noflines($file));














?>