<!DOCTYPE html>
<html lang="pl">
<head>
<title>Klub wędkowania</title>
<link rel="stylesheet" href="styl2.css" type="text/css"/>
<meta charset="UTF-8">
</head>
<body>
<header>
<h2>Wędkuj z nami</h2>
</header>
<div id="l">
<img src = "szczupak.jpg" alt="szczupak">
</div>
<div id="p">
<h3> Ryby spokojnego żeru (białe) </h3>
<?php
$connect = mysqli_connect("localhost","root","","wedkowanie1");
$zapytanie = "SELECT id, nazwa, wystepowanie FROM ryby WHERE ryby.styl_zycia=2";
$random= mysqli_query($connect,$zapytanie);
while($linia = mysqli_fetch_row($random))
{
	echo $linia[0].'. '.$linia[1].' '.$linia[2];
	echo '<br>';
}
mysqli_close($connect);
?>
<br>
<br>
<li>1.<a href = https://wedkuje.pl/ target ="_blank">„Odwiedź także”</a href></li>
<li>1.<a href = http://www.pzw.org.pl/ target ="_blank">„Polski Związek Wędkarski”</a href></li>
</div>
<footer>
<p>„Stronę wykonał: Beniamin”</p>
</footer>
</body>
</html>