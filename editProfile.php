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
        Edit Profile
    </div>

    <form action="prosesEditProfile.php" enctype="multipart/form-data" method="post">
        <table class="regisform">
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="NamaDepan" value="<?= $data['NamaDepan']; ?>" required></td>
                <td>Nama Tengah</td>
                <td><input type="text" name="NamaTengah" value="<?= $data['NamaTengah']; ?>" required></td>
                <td>Nama Belakang</td>
                <td><input type="text" name="NamaBelakang" value="<?= $data['NamaBelakang']; ?>" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="TempatLahir" value="<?= $data['TempatLahir']; ?>" required></td>
                <td>Tgl Lahir</td>
                <td><input type="date" name="TglLahir" value="<?= $data['TglLahir']; ?>" required></td>
                <td>NIK</td>
                <td><input type="number" name="NIK" value="<?= $data['NIK']; ?>" required></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="WargaNegara" value="<?= $data['WargaNegara']; ?>" required></td>
                <td>Email</td>
                <td><input type="email" name="Email" value="<?= $data['Email']; ?>" required></td>
                <td>No HP</td>
                <td><input type="number" name="NoHP" value="<?= $data['NoHP']; ?>" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea id="alamat" name="Alamat" required><?= $data['Alamat']; ?></textarea></td>
                <td>Kode Pos</td>
                <td><input type="text" name="KodePos" value="<?= $data['KodePos']; ?>" required></td>
                <td>Edit Foto</td>
                <td><input type="file" name="FotoProfil" accept="image/"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p style="color: red; text-align: center; font-size: 20px;">
                        <?php
                            if(isset($_SESSION['editMsg'])){
                                echo $_SESSION['editMsg'];
                            }
                        ?>
                    </p>
                </td>
                <td></td>
                <td>Foto Profil</td>
                <td rowspan="1"><img src="foto/<?= $data['NamaFoto'] ?>"></td>

            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="edit" value="Save Edit">
                </td>
                <td><a href="profile.php" class="kembali">Cancel</a></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>