<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Prognoza pogody Poznań</title>
<link rel="stylesheet" href="styl4.css" type="text/css"/>
</head>
<body>
<div id="b1">
<p>maj 2019 r.</p>
</div>
<div id="b2">
<h2>Prognoza dla Poznania</h2>
</div>
<div id="b3">
<img src="logo.png" alt="prognoza">
</div>
<div id="l">
<a href="kwerendy.txt">Kwerendy</a>
</div>
<div id="p">
<img src="obraz.jpg" alt="Polska, Poznań">
</div>
<main>
<table>
<tr>
<td id = "n">Lp.</td> <td id = "n">DATA</td> <td id = "n">NOC - TEMPERATURA</td> <td id = "n">DZIEŃ - TEMPERATURA</td> <td id = "n">OPADY [mm/h]</td> <td id = "n">CIŚNIENIE [hPa]</td>
</tr>
<?php
$connect = mysqli_connect("localhost","root","", "egzamin");
if($connect) {
 $zapytanie = "SELECT * FROM pogoda WHERE miasta_id = 2 ORDER BY data_prognozy DESC";
 $wynik= mysqli_query($connect,$zapytanie);
 if($wynik) {
   while($linia = mysqli_fetch_array($wynik)) {
       echo '<tr>';
	   echo '<td>'.$linia["id"].'</td>';
	   echo '<td>'.$linia["data_prognozy"].'</td>';
	   echo '<td>'.$linia["temperatura_noc"].'</td>';
	   echo '<td>'.$linia["temperatura_dzien"].'</td>';
	   echo '<td>'.$linia["opady"].'</td>';
	   echo '<td>'.$linia["cisnienie"].'</td>';
	   echo '</tr>';
} } mysqli_close($connect); }
?>
</table>
</main>
<footer>
<p>Stronę wykonał: Beniamin</p>
</footer>
</body>
</html>