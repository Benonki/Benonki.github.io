<html>
<head>
<meta charset="utf-8">
<title>FTP</title>
</head>
<body>
<?php
$host="localhost";
$ftp_conn = ftp_connect($host, 21) or die("Nie można się połączyć z $host");
$login = ftp_login($ftp_conn, "demo-user", "demo-user");
$server_file = "ftp_text.txt";
$local_file = "ftp_text2.txt";
$fp = fopen($local_file,"w");
if (ftp_fget($ftp_conn, $fp, $server_file, FTP_ASCII, 0))
  {
  echo "Udane wpisanie do $local_file.";
  }
else
  {
  echo "ERROR w ładowaniu $server_file.";
  }
ftp_close($ftp_conn);
fclose($fp);
?>
</body>
</html>
