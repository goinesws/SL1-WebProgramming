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
    <title>Profile</title>
    <style>
        .data{
            margin-left: auto;
            margin-right: auto;
        }

        td{
            padding: 10px;
        }

        img{
            width: 100px;
            height: 100px;
            object-fit: cover;
        }
        p{
            font-size: 30px;
            line-height: 500px;
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

    <div class="title">
        Profil Pribadi
    </div>

    <table class="data">
        <tr>
            <td>Nama Depan</td>
            <td><strong><?= isset($_SESSION['NamaDepan']) ? $_SESSION['NamaDepan'] : "" ?></td>
            <td>Nama Tengah</td>
            <td><strong><?= isset($_SESSION['NamaTengah']) ? $_SESSION['NamaTengah'] : "" ?></td>
            <td>Nama Belakang</td>
            <td><strong><?= isset($_SESSION['NamaBelakang']) ? $_SESSION['NamaBelakang'] : "" ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><strong><?= isset($_SESSION['TempatLahir']) ? $_SESSION['TempatLahir'] : "" ?></td>
            <td>Tgl Lahir</td>
            <td><strong><?= isset($_SESSION['TglLahir']) ? $_SESSION['TglLahir'] : "" ?></td>
            <td>NIK</td>
            <td><strong><?= isset($_SESSION['NIK']) ? $_SESSION['NIK'] : "" ?></td>            </tr>
        <tr>
            <td>Warga Negara</td>
            <td><strong><?= isset($_SESSION['WargaNegara']) ? $_SESSION['WargaNegara'] : "" ?></td>
            <td>Email</td>
            <td><strong><?= isset($_SESSION['Email']) ? $_SESSION['Email'] : "" ?></td>
            <td>No HP</td>
            <td><strong><?= isset($_SESSION['NoHP']) ? $_SESSION['NoHP'] : "" ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><strong><?= isset($_SESSION['Alamat']) ? $_SESSION['Alamat'] : "" ?></td>
            <td>Kode Pos</td>
            <td><strong><?= isset($_SESSION['KodePos']) ? $_SESSION['KodePos'] : "" ?></td>
            <td>Foto Profil</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><img src="foto/<?= isset($_SESSION['FotoProfil'])? $_SESSION['FotoProfil'] :"" ?>"></td>
        </tr>
    </table>    
</body>
</html>