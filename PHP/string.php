<?php
$z=21;
$z2="21Kebabow";
echo("z wynosi 21 a z2 21Kebabow")."<br>";
echo ("Czas na 2 ==")."<br>";
if($z==$z2)
{
echo("Sa takie same");
}
else 
{
echo("Nie sa takie same");
}
echo"<br>";
echo ("Czas na 3 ===")."<br>";
if($z===$z2)
{
echo("Sa takie same");
}
else 
{
echo("Nie sa takie same");
}
echo"<br>";
echo("Czas na StrStr")."<br>";
if(strstr($z2,"polska123")==true) echo "1";
else echo "-1";
echo"<br>";
echo("Czas na Strcmp")."<br>";
echo strcmp("jem 21Kebabow",$z2);
echo "<br>";
echo strcmp("Kuba","kUBA");
echo"<br>";
echo("Czas na Substr")."<br>";
echo substr("Jestem sobie koteczkiem",10)."<br>";
echo substr("Jestem sobie koteczkiem",3)."<br>";
echo("Czas na explode D:")."<br>";
$s = "4f>to>koksy"; 
$t = explode(">", $s);
echo ($t[0])."\n";
echo ($t[2]);
echo"<br>";
echo("Czas na Split")."<br>";
$ip = "123.456.789.000"; 
$iparr = split ("\.", $ip); 
echo "$iparr[0]"."\n";
echo "$iparr[2]";
echo"<br>";
echo("Czas na Strpos")."<br>";
$l="fajne lekcje sa w tej sali";
echo strpos($l,"sa");
echo"<br>";
echo("Czas na str_replace")."<br>";
echo str_replace("Jedyna","Przenajswietsza","Matko Jedyna!")."<br>";
$arr = array("niebieski","czerwony","zielony","zolty");
print_r(str_replace("czerwony","zolty",$arr,$i));
echo "Podmiany: $i";
echo"<br>";
echo("Czas na Strtr")."<br>";
echo strtr("Lia Vegia","ia","as");
?>