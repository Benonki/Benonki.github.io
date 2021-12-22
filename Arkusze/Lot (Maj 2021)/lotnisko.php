<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Port Lotniczy</title>
<link rel="Stylesheet" href="styl5.css" type="text/css"/>
</head>
<body>
<div id="b1">
<img src="zad5.png" alt="logo lotnisko">
</div>
<div id="b2">
<h1>Przyloty</h1>
</div>
<div id="b3">
<h3>przydatne linki</h3>
<a href="kw.txt" target="_blink">Pobierz...</a>
</div>
<main>
<table>
<tr>
<td>Czas</td> <td>kierunek</td> <td>nr rejsu</td> <td>status</td>
</tr>
<?php
$connect=mysqli_connect("localhost","root", "", "egzamin");
if($connect) {
	$zapytanie="select czas, kierunek, nr_rejsu, status_lotu from przyloty order by czas";
	$wynik=mysqli_query($connect, $zapytanie);
	while($linia=mysqli_fetch_array($wynik)) {
		echo '<tr>';
		echo '<td>'.$linia["czas"].'</td>'.'<td>'.$linia["kierunek"].'</td>'.'<td>'.$linia["nr_rejsu"].'</td>'.'<td>'.$linia["status_lotu"].'</td>';
		echo '</tr>';
	}
	mysqli_close($connect);
}
else
{
	echo "Nie możba się połączyć z bazą danych";
}
?>
</table>
</main>
<div id="s1">
<?php
$czas = 7200; 
setcookie ("UserVisit", $czas);
if (isSet ($_COOKIE ['UserVisit'])) 
{ 
echo '<p>'.'<i>'."Witaj ponownie  na stronie lotniska".'</i>'.'</p>'; 
} 
else 
{ 
echo '<p>'."Dzień Dobry! Strona lotniska używa ciasteczek".'</p>'; 
}
?>
</div>
<div id="s2">
Autor: Beniamin
</div>
</body>
</html>; 
}
