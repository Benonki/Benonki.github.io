<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Wycieczki krajoznawcze</title>
<link rel="stylesheet" href="styl4.css" type="text/css"/>
</head>
<body>
<header>
<h1>WITAMY W BIURZE PODRÓŻY</h1>
</header>
<main>
<h3>ARCHIWUM WYCIECZEK</h3>
<?php
$connect = mysqli_connect("localhost","root","","egzamin");
if($connect) {
 $zapytanie = "SELECT id, cel, cena FROM wycieczki WHERE dostepna = 0";
 $wynik= mysqli_query($connect,$zapytanie);
 if($wynik) {
   while($linia = mysqli_fetch_array($wynik)) {
       echo $linia["id"].". ".$linia["cel"].", cena: ".$linia["cena"].'<br>'; 
      }     }
mysqli_close($connect); }
?>
</main>
<div id="l">
<h3>NAJTANIEJ...</h3>
<table>
<tr>
<td>Włochy</td> <td>od 1200 zł</td>
</tr>
<tr>
<td>Francja</td> <td>od 1200 zł</td>
</tr>
<tr>
<td>Hiszpania</td> <td>od 1400 zł</td>
</tr>
</table>
</div>
<div id="s">
<h3>TU BYLIŚMY</h3>
<?php
$connect = mysqli_connect("localhost","root","","egzamin");
if($connect) {
 $zapytanie = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis DESC";
 $wynik= mysqli_query($connect,$zapytanie);
 if($wynik) {
   while($linia = mysqli_fetch_array($wynik)) {
       echo '<img src="'.$linia['nazwaPliku'].'" alt="'.$linia['podpis'].'">';
      }     }
mysqli_close($connect); }
?>
</div>
<div id="p">
<h3>SKONTAKTUJ SIĘ</h3>
<a href="mailto:wycieczki@wycieczki.pl">napisz do nas</a>
<p>telefon: 555666777</p>
</div>
<footer>
<p>Stronę wykonał: Beniamin</p>
</footer>
</body>
</html>