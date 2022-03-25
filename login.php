<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body id=login-bg>
    <div class="title">
        Login
    </div>
    <form action="prosesLogin.php" method="post">
        <table class="loginform">
            <tr>
                <td>
                    Username
                </td>
                <td><input type="text" name="usernameLogin" id=""> </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="passwordLogin"> </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Login">
                    <a href="welcome.php" class="kembali">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>