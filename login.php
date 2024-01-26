<!DOCTYPE html>
<html lang = "it">
    <head></head>
    <body>
      <p style : "center"><strong>Accedere</strong><br><br><br>
<?php
$hostname = "localhost";
$dbuser = "root";
$dbpassword  = "";
$dbname = "autenticazione";

//connessione al server sql

$conn = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);

//recupero dal POST username e password
$Username = $_POST['Username'];
$Password = $_POST['Password'];

$query = "select * from utenti where Username = '$Username' && Password = '$Password'";
$risultato = mysqli_query($conn, $query);
if(!$risultato){
    print "Errore nell'sql";
    exit();
}
$riga = mysqli_fetch_array($risultato);
if($riga){
    print "Benvenuto ". $riga['Username']." ". $riga['Password'];
    } else {
        print"Username o Password errate <br><br>";
    }


mysqli_close($conn);
?>
</body>
</hmtl>