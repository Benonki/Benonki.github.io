<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Wycieczki i urlopy</title>
<link rel="Stylesheet" href="styl3.css" type="text/css"/>
</head>
<body>
<header>
<h1>BIURO PODRÓŻY</h1>
</header>
<div id="l">
<h2>KONTAKT</h2>
<a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
<p>telefon: 555666777</p>
</div>
<div id="s">
<h1>GALERIA</h1>
<?php
$connect=mysqli_connect("localhost", "root", "", "egzamin");
if($connect) {
	$zapytanie="SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis";
	$wynik=mysqli_query($connect, $zapytanie);
	while($linia=mysqli_fetch_array($wynik)) {
	echo "<img src='".$linia['nazwaPliku']."' alt='".$linia['podpis']."'>";
	}
	mysqli_close($connect);
}
?>
</div>
<div id="p">
<h2>PROMOCJE</h2>
<table>
<tr>
<td>Jesień</td> <td>Grupa 4+</td> <td>Grupa 10+</td> 
</tr>
<tr>
<td>5%</td> <td>10%</td> <td>15%</td> 
</tr>
</table>
</div>
<main>
<h2>LISTA WYCIECZEK</h2>
<?php
$connect=mysqli_connect("localhost", "root", "", "egzamin");
if($connect) {
	$zapytanie="SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = 1";
	$wynik=mysqli_query($connect, $zapytanie);
	while($linia=mysqli_fetch_array($wynik)) {
	echo $linia['id'].". ".$linia['dataWyjazdu'].", ".$linia['cel'].", cena: ".$linia['cena'].'<br>';
	}
	mysqli_close($connect);
}
?>
</main>
<footer>
<p>Stronę wykonał: Beniamin</p>
</footer>
</body>
</html>