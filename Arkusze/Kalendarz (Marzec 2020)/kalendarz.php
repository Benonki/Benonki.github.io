<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<title>Mój kalendarz</title>
<link rel="stylesheet" href="styl5.css" type="text/css"/>
</head>
<body>
<div id="b1">
<img src="logo1.png" alt="Mój kalendarz">
</div>
<div id="b2">
<h1>KALENDARZ</h1>
<?php
$connect = mysqli_connect("localhost","root","","egzamin");
if($connect)          {
 $zapytanie =  "SELECT miesiac, rok FROM zadania where dataZadania='2020-07-01'";
 $wynik= mysqli_query($connect,$zapytanie);
 if($wynik)
  {
   while($linia = mysqli_fetch_array($wynik)) {
       echo '<h3>'.'miesiąc: '.$linia['miesiac'].', rok: '.$linia['rok'].'</h3>'; 
  }                                          }
mysqli_close($connect); }
?>
</div>
<main>
<?php
$connect = mysqli_connect("localhost","root","","egzamin");
if($connect)          {
 $zapytanie =  "SELECT dataZadania, wpis FROM zadania WHERE miesiac='lipiec'";
 $wynik= mysqli_query($connect,$zapytanie);
 if($wynik)
  {
   while($linia = mysqli_fetch_array($wynik)) {
       echo '<div class="blok">';
	   echo '<h5>'.$linia['dataZadania'].'</h5>';
	   echo '<p>'.$linia['wpis'].'</p>';
	   echo '</div>'; 
  }                                          }
  $wp=$_POST['wp'];
  $zapytanie =  "UPDATE zadania SET='".$wp."' WHERE dataZadania='2020-02-13'";
 $wynik= mysqli_query($connect,$zapytanie);
mysqli_close($connect); }
?>
</main>
<footer>
<form method="POST" action="kalendarz.php">
dodaj wpis: <input type="text" name="wp" id="wp">
<button type="submit" name="submit" id="submit">DODAJ</button>
</form>
<p>Stronę wykonał: Beniamin</p>
</footer>
</body>
</html>