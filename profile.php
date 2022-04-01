<?php
    session_start();
    include('config.php');
    $result = mysqli_query($connection, "SELECT * FROM profile WHERE Username = '{$_SESSION['Username']}'");
    $data = mysqli_fetch_assoc($result);
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
            /* line-height: 500px; */
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
            <td><a href="editProfile.php" class="kembali">Edit Profile</a></td>
        </tr>
        <tr>
            <td>Nama Depan</td>
            <td><strong><?= $data['NamaDepan'] ?></td>
            <td>Nama Tengah</td>
            <td><strong><?= $data['NamaTengah'] ?></td>
            <td>Nama Belakang</td>
            <td><strong><?= $data['NamaBelakang'] ?></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><strong><?= $data['TempatLahir'] ?></td>
            <td>Tgl Lahir</td>
            <td><strong><?= $data['TglLahir'] ?></td>
            <td>NIK</td>
            <td><strong><?= $data['NIK'] ?></td>            </tr>
        <tr>
            <td>Warga Negara</td>
            <td><strong><?= $data['WargaNegara'] ?></td>
            <td>Email</td>
            <td><strong><?= $data['Email'] ?></td>
            <td>No HP</td>
            <td><strong><?= $data['NoHP'] ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><strong><?= $data['Alamat'] ?></td>
            <td>Kode Pos</td>
            <td><strong><?= $data['KodePos'] ?></td>
            <td>Foto Profil</td>
            <td rowspan="4"><img src="foto/<?= $data['NamaFoto'] ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>    
</body>
</html>