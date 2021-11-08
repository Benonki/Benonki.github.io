<html>
<head>
<meta charset="utf-8">
<title>Odczyt/Zapis</title>
</head>
<body>
<h3>Odczyt i Zapis do pliku</h3>
<?php
if(isset($_POST['o']))
{
$o=$_POST['o'];
$f=fopen('jedz.txt', 'a');
fwrite($f, $o . "<br>");
fclose($f);
}
?>
<form method="post" attribute="post" action="odzap.php">
<p>Podaj co jadles dzisiaj na obiad: </br>
<input type="text" id="o" name="o"></p>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Wpisz</button>
</form>
<p></p>
<p>Co ludzie jedzą na obiad?</p></br>
<?php
if(file_exists('jedz.txt'))
{
	$f = file('jedz.txt');
	if(!empty($f))
	{
	foreach($f as $o)
	{
	echo $o;
	}
	}
	else
{
	echo "Brak Jedzonka";
}
}
else
{
	echo "Brak Jedzonka";
}
?>
</body>
</html>