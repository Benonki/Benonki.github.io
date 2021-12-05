<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<TITLE>Twój wskaźnik BMI</TITLE>
<link rel="stylesheet" href="styl4.css" type="text/css"/>
</head>
<body>
<div id="baner">
<h2>Oblicz wskaźnik BMI</h2>
</div>
<div id="logo">
<img src="wzor.png" alt="liczymy BMI">
</div>
<div id="lewo">
<img src="rys1.png" alt="zrzuć kalorie!">
</div>
<div id="prawo">
<h1>Podaj dane</h1>
<form method="POST" action="waga.php">
<p> Waga:
<input type="text" id="wg" name="wg"> 
</p>
<p> Wzrost [cm]:
<input type="text" id="wz" name="wz"> 
</p>
<button id="answer" name="answer" value="answer">Licz BMI i zapisz wynik</button>
</form>
<?php
$wg=$_POST["wg"];
$wz=$_POST["wz"];
if ($wg==NULL || $wz==NULL) { echo "Jedno z pól jest puste"; }
else {
$BMI=$wg/($wz *$wz);
$BMI=$BMI * 10000;
echo "Twoja waga: ".$wg." Twój wzrost: ".$wz.'<br>';
echo "BMI wynosi: ".$BMI;
if ($BMI<18) { $wart=1; }
else if($BMI>19 && $BMI<25) { $wart=2; }
else if($BMI>26 && $BMI<30) { $wart=3; }
else if($BMI>31 && $BMI<100) { $wart=4; }
$connect=mysqli_connect("localhost","root", "", "test");
if ($connect) {
$zapytanie="insert into wynik VALUES (NULL, ".$wart.", '".date("Y-m-d")."', ".$BMI.")";
$result=mysqli_query($connect, $zapytanie);
mysqli_close($connect);
}
}
?>
</div>
<main>
<table>
<tr>
<td>lp.</td> <td>Interpetacja</td> <td>zaczyna się od...</td>
</tr>
<?php
$connect=mysqli_connect("localhost","root", "", "test");
if ($connect) {
$zapytanie="SELECT id, informacja, wart_min FROM bmi";
$result=mysqli_query($connect, $zapytanie);
while($linia=mysqli_fetch_array($result)) {
echo '<tr>';
echo '<td>'.$linia["id"].'</td>'.'<td>'.$linia["informacja"].'</td>'.'<td>'.$linia["wart_min"].'</td>';
echo '</tr>';
}
mysqli_close($connect);
}
else { echo "Brak połączenia z bazą danych"; }
?>
</table>
</main>
<footer>
Autor: Beniamin 
<a href="kw2.jpg">Wynik dzialanie kwerendy 2</a>
</footer>
</body>
</html>
