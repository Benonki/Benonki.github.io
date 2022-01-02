<?php
$connect = mysqli_connect("localhost","root","", "egzamin");
if($connect) {
 $zapytanie = "";
 $wynik= mysqli_query($connect,$zapytanie);
 if($wynik) {
   while($linia = mysqli_fetch_array($wynik)) {
       echo "ID ".$linia["id"].'<br>'; 
} } mysqli_close($connect); }
else {
   echo "Nie udało połączyć się z bazą danych"; }
?>
