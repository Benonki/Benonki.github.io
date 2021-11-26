<?php   session_start();  ?>
<html>
  <head>
       <title>Lobby</title>
  </head>
  <body>
<?php
      if(!isset($_SESSION['use']))
       {
           header("Location:Login.php");  
       }
          echo $_SESSION['use'];
          echo "Login Success   ";
          echo "<a href='logout.php'>Wylogowanie</a> "."<br>"; 
?>
</body>
</html>
<?php
$Miesiąc = 2592000 + time(); 
setcookie ("UserVisit", date ("F jS - g: i a"), $Miesiąc);
if (isSet ($_COOKIE ['UserVisit'])) 
{ 
$ostatnia = $_COOKIE ['UserVisit']; 
echo "Witamy ponownie! <br> Ostatnia wizyta w dniu: ". $ostatnia; 
} 
else 
{ 
echo "Witamy w naszej witrynie!"; 
}
?>