<?php  session_start();   
if(isset($_SESSION['use']))                           
 {
    header("Location:home.php"); 
 }
if(isset($_POST['login']))   
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];

      if($user == "Ben" && $pass == "1234")  // username is  set to "Ank"  and Password   
         {                                   // is 1234 by default     
          $_SESSION['use']=$user.": ";
         echo '<script type="text/javascript"> window.open("home.php","_self");</script>';    
        }
        else
        {
            echo "Zły login lub hasło";        
        }
}
 ?>
<html>
<head>
<title>Cookies i Sesja</title>
</head>
<body>
<form action="" method="post">
    <table width="200" border="0">
  <tr>
    <td>  Login:</td>
    <td> <input type="text" name="user" > </td>
  </tr>
  <tr>
    <td> Hasło:</td>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>
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