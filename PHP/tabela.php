<html>
<head>
<meta charset="utf-8">
<title>Tablice</title>
</head>
<body>
<form method="post" action="tabela.php">
<p>Podaj pierwszy wymiar (wysokosc): </br>
<input type="text" name="w1" />
<p>Podaj drugi wymiar (dlugosc): </br>
<input type="text" name="w2" />
<p></p>
<input type="submit" value="Oblicz" />
</form>
<?php
$w1=$_POST['w1'];
$w2=$_POST['w2'];
$s=0;
$sr=0;
$il=1;
$d=$w1*$w2;
$tab[$w1][$w2];
for ($i=0; $i<$w1; $i++) 
{
	for($j=0; $j<$w2; $j++)
	{
		$tab[$i][$j]=rand(0,10); 
		$s=$s+$tab[$i][$j];
		$il=$il*$tab[$i][$j];
	}
}
arsort($tab);
echo "\nElementy tablicy to: <br>";
for ($i=0; $i<$w1; $i++) 
{
	for ($j=0; $j<$w2; $j++)
	{
		echo $tab[$i][$j];
		echo " ";
	}
	echo "<br>";
}
echo "<br>";
echo "Suma wynosi: ".$s."<br>";
$sr=$s;
echo "Iloczyn wynosi: ".$il."<br>";
echo "Srednia wynosi: ".$sr=$sr/$d;
?>
</body>
</html>