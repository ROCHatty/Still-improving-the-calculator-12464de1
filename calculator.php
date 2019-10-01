<?php

if (isset($_GET['type'])) {
	if (is_numeric($_GET['a'])) {
		if (is_numeric($_GET['b'])) {
			$actie = $_GET['type'];
			$a = $_GET['a'];
			$b = $_GET['b'];
			if ($actie == "Plus") {
				$antwoord = $a+$b;
			} elseif ($actie == "Min") {
				$antwoord = $a-$b;
			} elseif ($actie == "Keer") {
				$antwoord = $a*$b;
			} elseif ($actie == "Deel") {
				$antwoord = $a/$b;
			} else {
				$antwoord = 0;
			}
		}
	}
} else {
	$antwoord = "Eerst even iets invullen he!";
}

?><form method="GET">
<input type="number" name="a" placeholder="Eerste nummer"><br /><br />
<input type="number" name="b" placeholder="Tweede nummer"><br /><br />
<h1>Antwoord -> <?php echo $antwoord; ?></h1>
<br /><br />
<input type="submit" name="type" value="Plus">&nbsp;&nbsp;<input type="submit" name="type" value="Min">&nbsp;&nbsp;<input type="submit" name="type" value="Keer">&nbsp;&nbsp;<input type="submit" name="type" value="Deel">&nbsp;&nbsp;
</form>