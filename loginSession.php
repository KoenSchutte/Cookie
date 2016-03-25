<?php

//fictief voorbeeld: systeem met 1 gebruiker. Gebruikers komen normaal uit de database, password encrypted
$username = 'Koen';
$password = 123;

?>

<?php
session_start();
if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1) {

    echo 'Hello ' . $_SESSION['user'];
} elseif (isset($_POST['username']) && isset($_POST['password'])) {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {

        $_SESSION['user'] = $_POST['username'];
        $_SESSION['logged_in'] = true;
    } else {
        echo '<form method="post">
        <input type="text" name="username" required="required"></br>
        <input type="text" name="password" required="required"></br>
        <input type="submit" value="GO">
        </form>';
    }
}
echo "<h3>Inlog: Koen wachtwoord: 123</h3>"
?>