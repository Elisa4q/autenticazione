<!DOCTYPE html>
<html lang = "it">
    <head></head>
    <body>
      <p style : "center"><strong>Accedere</strong><br><br><br>
<?php
$hostname = "localhost";
$username = "root";
$password  = "";
$dbname = "autenticazione";

print"<form method='post' action = 'login.php'>";
print"Username: <input type = 'text' name = 'user'><br><br>";
print"Password: <input type = 'text' name = 'psw'><br><br>";
print"<input type = 'submit' value = 'Accedi'> &nbsp; &nbsp; &nbsp;";
print"<input type = 'reset' value = 'Reset'>";
print"</form>";



?>
</body>
</hmtl>
 