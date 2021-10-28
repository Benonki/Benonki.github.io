<html>
<head>
<meta charset="utf-8">
<title>Kalkulator</title>
</head>
<body>
<form method="post" attribute="post" action="2kalk.php">
<p>First Value:</br>
<input type="text" id ="first" name="first"></p>
<p>Second Value:</br>
<input type="text" id ="second" name="second"></p>
<input type="radio" id ="add" name="group1" value="add"checked="true"><p>+</p></br>
<input type="radio" id ="subtract" name="group1" value="subtract"><p>-</p></br>
<input type="radio" id ="times" name="group1" value="times"><p>x</p></br>
<input type="radio" id ="divide" name="group1" value="divide"><p>/</p></br>
<input type="radio" id ="potega" name="group1" value="potega"><p>**</p></br>
<input type="radio" id ="pierwiastek" name="group1" value="pierwiastek"><p>/-</p></br>
<p></p>
<button type="submit" name="answer" id="answer" value="answer">Oblicz</button>
</form>
<p>The Answer Is: </p>
<?php
$first = $_POST['first'];
$second = $_POST['second'];
function add($first, $second) {
return $first + $second; }
function sub($first, $second){
return $first-$second; }
function mul($first, $second){
return $first*$second; }
function div($first, $second){
return $first/$second; }
function pot($first, $second){
return $first**$second; }
function pie($first, $second){
return $first**(1/$second);}
switch($_POST['group1'])
{
case 'add':
echo add($first, $second);
break;
case 'subtract':
echo sub($first, $second);
break;
case 'times':
echo mul($first, $second);
break;
case 'divide':
if($second==0) {
echo "Nie dzielimy przez 0 gamoniu";
break; }
echo div($first, $second);
break;
case 'potega':
echo pot($first, $second);
break;
case 'pierwiastek':

echo pie($first, $second);
break;
}
?>
</body>
</html>
