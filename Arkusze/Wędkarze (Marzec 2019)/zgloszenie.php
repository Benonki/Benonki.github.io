<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<TITLE>Wędkowanie - moje hobby</TITLE>
</head>
<body>
<?php
$num=$_POST['num'];
$data=$_POST['dat'];
$sed=$_POST['sed'];
$connect=mysqli_connect("localhost","root","","egzamin");
if($connect) {
	$zapytanie = "Insert INTO zawody_wedkarskie VALUES (NULL,0,'.$num.','.$data.', '.$sed.')";
	$wynik = mysqli_query($connect, $zapytanie);
mysqli_close($connect);
}
else {
	echo "Nie można połączyć się z bazą danych";	}
?>
</body>
</html>