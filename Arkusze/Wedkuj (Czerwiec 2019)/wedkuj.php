<!DOCTYPE html>
<html lang="pl">
<head>
 <meta charset="utf-8"/>
 <title>Wędkujemy</title>
 <link rel="stylesheet" href="styl_1.css" type="text/css"/>
</head>
<body>
<header>
<h1>Portal dla wędkarzy</h1>
</header>
<div id="l">
<h2>Ryby drapieżne naszych wód</h2>
<?php
$connect = mysqli_connect("localhost","root","","wedkowanie");
$zapytanie = "SELECT nazwa, wystepowanie FROM ryby WHERE styl_zycia=1";
$random= mysqli_query($connect,$zapytanie);
while($linia = mysqli_fetch_row($random))
{
	echo $linia[0].', wystepowanie: '.$linia[1];
	echo '<br>';
}
mysqli_close($connect);
?>
</div>
<div id="p">
<img src="ryba1.jpg" alt="Sum">
<br>
<a href ="kwerendy.txt">Pobierz kwerendy</a href>
</div>
<footer>
<p>Stronę wykonał: Beniamin</p>
</footer>
</body>
</html>