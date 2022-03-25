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
    <title>Home</title>
    <style>
        p{
            font-size: 30px;
            line-height: 450px;
            text-align: center;
        }
        .directory a{
            margin: 10px;
            text-decoration: none;
            color: black;
        }
        .header{
            padding: 10px;
        }
    </style>
</head>
<body id=home-bg>
    <div class="header">
        <div class="appName">Aplikasi Pengelolaan Keuangan</div>
        <div class="directory">
            <a href="home.php" class="headDirectory">Home</a>
            <a href="profile.php" class="headDirectory">Profile</a>
        </div>
        <div class="directory">
            <a href="logout.php" class="headDirectory">Logout</a>
        </div>
    </div>
    <div class="content">
        <p>
            Halo <strong>
            <?php
                echo($_SESSION['NamaDepan']." ".$_SESSION['NamaTengah']." ".$_SESSION['NamaBelakang']);
            ?> </strong>
            , Selamat datang di Aplikasi Pengelolaan Keuangan
        </p>
    </div>
</body>
</html>