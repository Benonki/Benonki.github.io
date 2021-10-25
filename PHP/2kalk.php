<html>
<head>
<meta charset="utf-8">
<title>Kalkulator</title>
</head>
<body>
<form method="post" attribute="post" action="kalk.php">
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
function add($_POST('group1')){
$wynikdod= $first+$second;
return $wynikdod;
}
function add('add');
//case 'subtract':
//echo $first - $second;
//break;
//case 'times':
//echo $first * $second;
//break;
//case 'divide':
//if($second==0)
//{
//echo "Nie dzielimy przez 0 gamoniu";
//break;	
//}
//echo $first / $second;
//break;
//case 'potega':
//echo $first**$second;
//break;
//case 'pierwiastek':
//echo $first**(1/$second);
//break;
//}
?>
</body>
</html>