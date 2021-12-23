<!DOCTYPE html>
<html lang ="pl">
<head>
<title> Piłka nożna </title>
<meta charset = "utf-8" />
<link rel = "stylesheet" href = "styl2.css" type = "text/css" />
</head>
<body>
<div id ="Baner">
<h3> Reprezentacja polski w piłce nożnej </h3>
<img src = "obraz1.jpg" alt = "reprezentacja" >
</div>
<div id ="Lewy">
<form action ="liga.php" method = "POST" >
<select name = "Wybor" >
<option value = "Bramkarze"> Bramkarze </option>
<option value = "Obrońcy"> Obrońcy </option>
<option value = "Pomocnicy"> Pomocnicy </option>
<option value = "Napastnicy"> Napastnicy </option>
</select>
<button type = "Submit"> Zobacz </button>
</form>
<img src = "zad2.png" alt = "piłka" >
<p> Autor: Beniamin </p> 
</div>
<div id ="Prawy">
<ol> 
<?php
$Wybor = $_POST['Wybor']; 
if ($Wybor == "Bramkarze") $pozycja = 1;
else if ($Wybor == "Obrońcy") $pozycja = 2;
else if ($Wybor == "Pomocnicy") $pozycja = 3;
else if ($Wybor == "Napastnicy") $pozycja = 4;
$connect = mysqli_connect("localhost", "root", "","egzamin2");
if ($connect)
{
	if($Wybor == null)
	{
		echo "Nie wybrano żadnej pozycji";
	} else {
		$kw1 = "SELECT imie, nazwisko FROM zawodnik   WHERE pozycja_id = ".$pozycja;
	$Wynik = mysqli_query($connect, $kw1);
	while ($linia = mysqli_fetch_array($Wynik)){
		echo '<p> <li>'.$linia['imie'].' '.$linia['nazwisko'].'</li> </p>';
	} } 
	mysqli_close($connect);
}
?>
</ol>
</div>
<main>
<h3> Liga mistrzów </h3>
</main>
<div id = "Liga">
<?php
$connect = mysqli_connect("localhost", "root", "","egzamin2");
if ($connect)
{
	$kw1 = "SELECT zespol, punkty, grupa FROM liga ORDER BY punkty DESC";
	$Wynik = mysqli_query($connect, $kw1);
	while ($linia = mysqli_fetch_array($Wynik)){
		echo '<div class = "kw">';
		echo '<h2>'.$linia['zespol'].'</h2>'; 
		echo '<h1>'.$linia['punkty'].'</h1>';
	    echo '<p>'.'grupa: '.$linia['grupa'].'</p>'; 			
		echo '</div>';
		
		
	}
	mysqli_close($connect);
}
?>
</div>
</body>
</html>