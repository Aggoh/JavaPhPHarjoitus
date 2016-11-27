	<?php
	require_once('/home/K7182/dbconfig/db-init.php');
		function AsetaRavintola($ravintola)
		{
$output = <<<OUTPUTEND
	<form method="POST" action="php/add_rate.php">
		<input type="text" name="nimimerkki" placeholder="Nimimerkki" maxlength="25"><br>
		<textarea name="teksti" rows="4" cols="50" maxlength="1000"> </textarea>
			<fieldset class="$ravintola">
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
		//<input pattern="." type="radio" id='{$ravintola}_5' name='{$ravintola}_1' value="5" /><label for="star5" title="Rocks!"></label>
	?>
	

  