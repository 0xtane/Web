<?php
function getKey($testKey, &$arr) {
	 if (array_key_exists($testkey, $arr)) {
		 return $arr[$testkey];
	 }
	 else return 0;
}

error_reporting(E_ALL);

const kmcoef =  1.60934;
//$numOfDistances = rand(50,51);
$numOfDistances = 2000;
$arrDistances = array();

for ($i=0; $i < $numOfDistances; $i++) {
    array_push($arrDistances,rand(1,100));
}

print_r($arrDistances);

sort($arrDistances);

print_r($arrDistances);

$arrMiles = array();

for ($i=0,$suffixCount=0,$temp=0; $i < sizeof($arrDistances); $i++) {
	if ($temp == $arrDistances[$i]) {
		$arrMiles[(string)$arrDistances[$i].chr(65+$suffixCount)]=$arrDistances[$i]/kmcoef;
		$suffixCount++;
	}
    else {
			$arrMiles[$arrDistances[$i]]=$arrDistances[$i]/kmcoef;
			$suffixCount = 0;
	}
	$temp = $arrDistances[$i];
}
print_r($arrMiles);

foreach ($arrMiles as $key => $value) {
	printf("   |%s\t| ->\t%.3f\n",(string)$key,$value);
}
    

?>