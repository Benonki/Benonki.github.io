<?php
$connect = mysqli_connect("localhost","root","", /*NAZWA BAZY NP: */ "szkoła");
if($connect)
{
 $zapytanie = /* NAZWA ZAPYTANIA NP: */ "SELECT * FROM uczen";
 $wynik= mysqli_query($connect,$zapytanie);
 if($wynik)
  {
   while($linia = mysqli_fetch_array($wynik))
      {
       echo "ID ucznia ".$linia["id"]." Nazwisko: ".$linia["nazwisko"].'<br>'; /* WYSWIETLA W KOLEJNOSCI ID -> NAZWISKO */
      }
  }
   else
      {
    	echo "Błąd wykonania zapytania";
      }
mysqli_close($connect);
}
else
  {
   echo "Nie udało połączyć się z bazą danych";
  }
?>
