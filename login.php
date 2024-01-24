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

//connessione al server sql

$conn = mysqli_connect($hostname, $username, $password, $dbname);

    

$query = "select * from home where Username = $Username && Password = $Password";
$risultato = mysqli_query($conn, $query);
if(!$risultato){
    print "Errore nel comando";
    exit();
}
$riga = mysqli_fetch_array($risulato);
if($riga){
    print "Benvenuto". $riga('Nome'). $riga('Cognome');
    } else {
        print"Username o Password errate <br><br>";
    }


mysqli_close($conn);
?>
</body>
</hmtl>