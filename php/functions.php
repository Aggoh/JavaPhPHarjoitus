	<?php
	function ArvosteleRavintola($ravintola)
	{
		$output = <<<OUTPUTEND
		<form method="POST" action="php/add_rate.php">
			<input type="text" name="nimimerkki" placeholder="Nimimerkki" maxlength="25"><br>
			<textarea name="teksti" rows="4" cols="50" maxlength="1000"> </textarea>
			<fieldset class="arvostelu">
				<input pattern="." type="radio" id="star5" name='rating' value="5" /><label for="star5" title="Rocks!"></label>
				<input pattern="." type="radio" id="star4" name='rating' value="4" /><label for="star4" title="Pretty good"></label>
				<input pattern="." type="radio" id="star3" name='rating' value="3" /><label for="star3" title="Meh"></label>
				<input pattern="." type="radio" id="star2" name='rating' value="2" /><label for="star2" title="Kinda bad"></label>
				<input pattern="." type="radio" id="star1" name='rating' value="1" /><label for="star1" title="Sucks big time"></label>
			</fieldset>				
OUTPUTEND;
		echo $output;
		echo "<button type='submit' name='arvostele' value='{$ravintola}'>arvostele!</button>";
		echo "</form>";
	}
	
	function LueArvostelu($db, $ravintola)
	{
		$luesql = "SELECT * FROM arvostelut WHERE ravintola = ?";
		$luestmt = $db->prepare($luesql);
		$luestmt->execute(array($ravintola));
		while($luerow = $luestmt->fetch(PDO::FETCH_ASSOC)) {
			$output = <<<OUTPUTEND
				<tr>
					<td style="font-weight: bold;">{$luerow['nimimerkki']}</td>
				</tr>
				<tr>
				<td>Arvosana: {$luerow['rating']}/5</td>
				</tr>
				<tr>
					<td style="padding-bottom: 10px;">{$luerow['teksti']}</td>
				</tr>
OUTPUTEND;
			echo $output;
		}
	}
	
	function LisaaRavintola($id, $name){
		$output = <<<OUTPUTEND
		<div class="col-md-4">
		<h1 href="#collapse_{$id}" data-toggle="collapse">{$name}</h1>
		<img href="#collapse_{$id}" data-toggle="collapse" src="img/{$id}.jpg" height="150" width="300" alt="" />
		<div id="collapse_{$id}" class="collapse">
		<table align="center" id="{$id}">
		</table>
		</div>
		</div>
OUTPUTEND;
		echo $output;
	}
	
	function GetMenus() {
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
		for ($i = 0; $i < $urlArray_size; $i++) {
			$html = file_get_contents($urlArray[$i]);
			file_put_contents($fileArray[$i], $html);
		}
}
	?>
	

  