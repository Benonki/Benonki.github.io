<!DOCTPE html>
<html lang="pl">
<head>
<meta charset="utf-8"/>
<TITLE>Pogotowie Ratunkowe</TITLE>
</head>
<body>
<?php
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$a=$_POST['a'];
$czas=date('H:i:sa');
$connect=mysqli_connect("localhost", "root", "", "egzamin");
if ($connect) {
	$zapytanie="INSERT INTO zgloszenia VALUES (NULL, '.$n1.','.$n2.','.$a.',0,'.$czas.')";
	$result=mysqli_query($connect, $zapytanie);
	mysqli_close($connect);
}
else {
	echo "Nie mozna sie polaczyc z baza";
}
?>
</body>
</html>
