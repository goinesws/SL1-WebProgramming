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
    <title>Welcome</title>
    <style>
        .regisMsg{
            text-align: center;
            margin-top: 100px;
            font-size: large;
        }
    </style>
</head>
<body id="welcome">
    <div class="title">
        Aplikasi Pengelolaan Keuangan
    </div>
    <div class="headline">
        Selamat Datang di Aplikasi Pengelolaan Keuangan
    </div>

    <div class="buttons">
        <a href="login.php">
        <div class="login">
            Login
        </div>
        </a>
        <a href="register.php">
        <div class="register">
            Register
        </div>
        </a>
    </div>

    <div class="regisMsg">
        <p>
            <?php
                if(isset($_SESSION['regisMsg'])){
                    echo($_SESSION['regisMsg']);
                }
            ?>
        </p>
    </div>
</body>
</html>