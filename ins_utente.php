<!DOCTYPE html>
<html lang = "it">
    <head>
        <meta charset = "utf-8">
        <title>INSERIMENTO NUOVO UTENTE</title>
    </head>
    <body>
        <?php
            $hostname = "localhost";
            $username = "root";
            $password = "";
            $dbname = "autenticazione";
            
            //connessione al server
        $conn = mysqli_connect($hostname, $username, $password, $dbname);
        if(!$conn)
        {
            die("ERRORE NELLA CONNESSIONE");
            exit();
        
        }
       //recupero dei dati dal form.html
        $Nome = $_POST['Nome'];
        $Cognome = $_POST['Cognome'];
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];

        $query = "INSERT INTO utenti (Nome, cognome, Username, Password) VALUES
        ('$Nome', '$Cognome', '$Username', '$Password')";

        $risultato = mysqli_real_query($conn, $query);

        if(!$risultato) {
            print("Errore nell'inserimento");
            print("$Nome, $Cognome, $Username, $Password");
            print($query);
        } else {
            print("Registrazione avvenuta con successo");
        }

mysqli_close($conn);
?>
</body>
</hmtl>