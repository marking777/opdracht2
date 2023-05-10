<!DOCTYPE html>
<html>
<head>
<title>Formulier met GET-methode</title>
</head>
<body>

<?php

if (isset($_GET['verzenden'])) {

$naam = $_GET['naam'];

$achternaam = $_GET['achternaam'];

$leeftijd = $_GET['leeftijd'];

$adres = $_GET['adres'];

$email = $_GET['email'];




echo "<h2>Bedankt voor het invullen van het formulier!</h2>";

echo "<p>je naam is: " . $naam . " " . $achternaam . "</p>";

echo "<p>je leeftijd is: " . $leeftijd . "</p>";

echo "<p>je adres is: " . $adres . "</p>";

echo "<p>je e-mailadres is: " . $email . "</p>";

} else {

?>

<form method="GET" action="">

<label for="naam">Naam:</label>

<input type="text" id="naam" name="naam" required><br>

<label for="achternaam">Achternaam:</label>

<input type="text" id="achternaam" name="achternaam" required><br>

<label for="leeftijd">Leeftijd:</label>

<input type="number" id="leeftijd" name="leeftijd" required><br>




<label for="adres">Adres:</label>

<input type="text" id="adres" name="adres" required><br>

<label for="email">Email:</label>

<input type="email" id="email" name="email" required><br>

<input type="submit" name="verzenden" value="Verzenden">

</form>

<?php

}

?>

</body>

</html>