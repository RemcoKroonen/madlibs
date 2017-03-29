<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="madlibs.css">
	<title>Mad Libs</title>
</head>
<body>
	<h1>Mad Libs</h1>
	<a href="index.php">Er heerst paniek...</a>
	<a href="Onkunde.php">Onkunde</a>
	<h3>Onkunde</h3>

	<p>Er zijn veel mensen die niet kunnen <?= $_GET["q1"]?>. Neem nou <?= $_GET["q2"]?>. Zelfs met de hulp van een <?= $_GET["q4"]?> of zelfs <?= $_GET["q3"]?> kan <?= $_GET["q2"]?> niet <?= $_GET["q1"]?>. Dat heeft niet te maken met een gebrek aan <?= $_GET["q5"]?>, maar met een te veel aan <?= $_GET["q6"]?>. Te veel <?= $_GET["q6"]?> leidt tot <?= $_GET["q7"]?> en dat is niet goed als je wilt <?= $_GET["q1"]?>. Helaas voor <?= $_GET["q2"]?></p>

</body>
</html>