<html>
<head>
<meta charset="utf-8">
<title>Kalkulator</title>
</head>
<body>
<p>Dla X Bez Potęgi</p></br>
<form method="post" attribute="post" action="spr.php">
<p>A Value is: </br>
<input type="text" id="a" name="a"></p>
<p>B Value is: </br>
<input type="text" id="b" name="b"></p>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Oblicz</button>
</form>
<p>The X is: </p>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
function pier($a, $b) {
IF($a==0) {
echo "Nie ma rozwiązania gdyż A jest zerem";
return; }
return (-$b)/$a; }
echo "Odpowiedz to ";
echo pier($a, $b);
?>
<p></p></br>
<p>Dla X Z Potęgą</p></br>
<form method="post" attribute="post" action="spr.php">
<p>A Value is: </br>
<input type="text" id="a" name="a"></p>
<p>B Value is: </br>
<input type="text" id="b" name="b"></p>
<p>C Value is: </br>
<input type="text" id="c" name="c"></p>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Oblicz</button>
</form>
<p>The X is: </p>
<?php
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$delta=0;
function pier2($a, $b, $c) {
IF($a==0) {
echo "Nie ma rozwiązania gdyż A jest zerem";
return; }
$delta=(($b*$b)-(4*$a*$c));
return $delta;}
echo "Delta wynosi ";
echo pier2($a, $b, $c)."</br>";
if(pier2($a, $b, $c)>0) {
$x1=(((-$b)-((pier2($a, $b, $c))**0.5))/(2*$a));
$x2=(((-$b)+((pier2($a, $b, $c))**0.5))/(2*$a)); 
echo "odpowiedz to ";
echo $x1;
echo " oraz "; 
echo $x2; }
else if(pier2($a, $b, $c)==0) {
$x0=((-$b)/2*$a);
echo "Odpowiedz to ";
echo $x0; }
else if(pier2($a, $b, $c)<0) {
echo "Brak rozwiązania"; }
?>
</body>
</html>