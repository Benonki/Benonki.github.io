<!DOCTYPE html>
<html lang = "pl" >
<head>
<meta charset = "utf-8" />
<title> Odloty samolotów </title>
<link rel = "stylesheet" href = "styl6.css" />
</head>
<body>
<div id = "Baner1" >
<h2> Odloty z lotniska </h2>
</div>
<div id = "Baner2" >
<img src = "zad6.png" alt = "logotyp" > 
</div>
<main>
<h4> Tabela odlotów </h4> 
<table>
<tr>
<td> lp </td> <td> numer rejsu </td> <td> czas </td> <td> kierunek </td> <td> status </td> 
</tr>
<?php
$connect = mysqli_connect("localhost", "root", "", "egzamin3");
if ($connect) {
	$zapytanie = "SELECT id, nr_rejsu, czas, kierunek, status_lotu FROM odloty ORDER BY czas desc";
	$wynik = mysqli_query($connect, $zapytanie);
	while ($linia = mysqli_fetch_array($wynik)) {
		echo '<tr>';
		echo '<td>'.$linia['id'].'</td>';
		echo '<td>'.$linia['nr_rejsu'].'</td>';
		echo '<td>'.$linia['czas'].'</td>';
		echo '<td>'.$linia['kierunek'].'</td>';
		echo '<td>'.$linia['status_lotu'].'</td>';
		echo '</tr>';
	}


mysqli_close($connect);	
}

?>
</table>
</main>
<div id = "Stopka1" >
<a href = "kwerendy.txt" > Pobierz obraz </a>
</div>
<div id = "Stopka2" >
<?php
$czas = 3600; 
setcookie ("UserVisit", $czas);
if (isSet ($_COOKIE ['UserVisit']))  { 
echo '<p>'."Miło nam, że nas znowu odwiedziłeś".'</p>'; 
}  else  { 
echo '<p>'.'<i>'."Dzień Dobry! Sprawdź regulamin naszej strony".'</i>'.'</p>'; 
}
?>
</div>
<div id = "Stopka3" >
Autor: BGBŻ
</div>
</body>
</html>
