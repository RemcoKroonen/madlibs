<!DOCTYPE html>
<html>
<head>
	<title>Mad Libs</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="madlibs.css">
</head>
<body>
	<h1>Mad Libs</h1>
	<a href="index.php">Er heerst paniek...</a>
	<a href="Onkunde.php">Onkunde</a>
	<h3>Er heerst paniek...</h3>

	<p>Er heerst paniek in het koninkrijk <?= $_GET["q3"]?>. Koning <?= $_GET["q6"]?> is ten einde raad en als koning <?= $_GET["q6"]?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_GET["q2"]?><br>"<?= $_GET["q2"]?> Het is een ramp! Het is een schande!"<br>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br>"Mijn <?= $_GET["q1"]?> is verdwenen! Zo maar, zonder waarschuwing.En ik had net <?= $_GET["q5"]?> voor hem gekocht!"<br>"Majesteit uw <?= $_GET["q1"]?> komt vast vanzelf weer terug?"<br>"ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_GET["q8"]?> leren?"<br>"Maar Sire, daar kunt u toch uw <?= $_GET["q7"]?> voor gebruiken"<br>"<?= $_GET["q2"]?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br>"<?= $_GET["q4"]?>, Sire."</p>

</body>
</html>