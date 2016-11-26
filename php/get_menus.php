<?php
date_default_timezone_set('Europe/Helsinki');

$checkDate = "menus/aimo/amica_1.json";
$modifiedDate = date( "Y/m/d", filemtime($checkDate));
$date = new DateTime();
$dweek = new DateTime();
$orig_week = $dweek->format("W");
$result = $date->format("Y/m/d");
for($i = 0; $i < 7; $i++) {
	$week = $dweek->format("W");
	if($orig_week != $week) {
		getJSON();
	}
	if($result == $modifiedDate){
		break;
		}
	$date->modify("-1 day");
	$dweek->modify("-1 day");
	$result = $date->format("Y/m/d");
	if($i == 6){
		getJSON();
	}
}

function getJSON() {
	$date = new DateTime();
	$date->modify('monday this week');
	$result = $date->format('Y/m/d');
	$urlArray = array();
	$fileArray = array();
	
	for($i = 0; $i < 5; $i++) {
		$aimo = "http://www.amica.fi/modules/json/json/Index?costNumber=0350&language=fi&firstDay={$result}";
		$bitti = "http://www.sodexo.fi/ruokalistat/output/daily_json/5865/{$result}/fi";
		$poliisi = "http://www.sodexo.fi/ruokalistat/output/daily_json/56/{$result}/fi";
		$fAimo = "menus/aimo/amica_" . $i . ".json";
		$fBitti = "menus/bitti/bitti_" . $i . ".json";
		$fPoliisi = "menus/poliisi/poliisi_" . $i . ".json";
		array_push($fileArray, $fAimo);
		array_push($fileArray, $fBitti);
		array_push($fileArray, $fPoliisi);
		array_push($urlArray, $aimo);
		array_push($urlArray, $bitti);
		array_push($urlArray, $poliisi);
		$date->modify("+1 day");
		$result = $date->format('Y/m/d');
	}

	$urlArray_size = count($urlArray);

	for ($i = 0; $i < $urlArray_size; $i++)
	{
		// Load html
		$html = file_get_contents($urlArray[$i]);
		file_put_contents($fileArray[$i], $html);
	}
}


