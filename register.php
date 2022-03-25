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
    <title>Register</title>
</head>
<body id=register-bg>
    <div class="title">
        Register
    </div>
    <form action="prosesRegister.php" enctype="multipart/form-data" method="post">
        <table class="regisform">
            <tr>
                <td>Nama Depan</td>
                <td><input type="text" name="NamaDepan" id="" required></td>
                <td>Nama Tengah</td>
                <td><input type="text" name="NamaTengah" id="" required></td>
                <td>Nama Belakang</td>
                <td><input type="text" name="NamaBelakang" id="" required></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><input type="text" name="TempatLahir" id="" required></td>
                <td>Tgl Lahir</td>
                <td><input type="date" name="TglLahir" id="" required></td>
                <td>NIK</td>
                <td><input type="number" name="NIK" id="" required></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><input type="text" name="WargaNegara" id="" required></td>
                <td>Email</td>
                <td><input type="email" name="Email" id="" required></td>
                <td>No HP</td>
                <td><input type="number" name="NoHP" id="" required></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><textarea id="alamat" name="Alamat" id="" required></textarea></td>
                <td>Kode Pos</td>
                <td><input type="text" name="KodePos" id="" required></td>
                <td>Foto Profil</td>
                <td><input type="file" name="FotoProfil" id="" accept="image/" required></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" id="" required></td>
                <td>Password 1</td>
                <td><input type="password" name="Password1" id="" required></td>
                <td>Password 2</td>
                <td><input type="password" name="Password2" id="" required></td>
            </tr>
            <tr>
                <td colspan="3">
                    <p style="color: red; text-align: center;">
                        <?php
                            if(isset($_SESSION['message'])){
                                echo $_SESSION['message'];
                            }
                        ?>
                    </p>
                </td>
                <td></td>
                <td>
                    <input type="submit" name="submit" value="Register">
                </td>
                <td><a href="welcome.php" class="kembali">Kembali</a></td>
            </tr>
        </table>
    </form>
    </div>
</body>
</html>