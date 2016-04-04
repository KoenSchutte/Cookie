<?php
$username = "Test";
$password = "123";
$exp = time() + ((60*60*24)*7);
$path = "./";

if(isset($_COOKIE['logged_in'])&& $_COOKIE['logged_in'] == 1)
{
    echo "Welkom " . $_COOKIE['user'];
}elseif(isset($_POST['name'])&& isset($_POST['pass']))
{
    if($_POST['name'] == $username && $_POST['pass'] == $password){

        setcookie('logged_in', '1' , $exp, $path);
        setcookie('user', $_POST['name'], $exp, $path);

        echo "Welcome " . $_COOKIE['user'];
    }else{
        echo '<form method="post">
                <input type="text" name="name" placeholder="Naam">
                <input type="password" name="pass" placeholder="Wachtwoord">
                <input type="submit">
            </form>';
    }


}else{
    echo '<form method="post">
                <input type="text" name="name" placeholder="Naam">
                <input type="password" name="pass" placeholder="Wachtwoord">
                <input type="submit">
           </form>';
}
?>

<html>
<p>User: Test <br>
    Wachtwoord: 123</p>
</html>
