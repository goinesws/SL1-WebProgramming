<?php
    session_start();
    include('config.php');

    if(isset($_POST['submit'])){
        $_SESSION['regisMsg'] = '';


        $result = mysqli_query($connection, "SELECT * FROM profile WHERE Username = '{$_POST['usernameLogin']}'");
        $data = mysqli_fetch_assoc($result);
        echo $data["Password"];

        if($data['Password']==$_POST['passwordLogin']) {
            $_SESSION['NamaDepan'] = $data['NamaDepan'];
            $_SESSION['NamaTengah'] = $data['NamaTengah'];
            $_SESSION['NamaBelakang'] = $data['NamaBelakang'];
    
            $_SESSION['TempatLahir'] = $data['TempatLahir'];
            $_SESSION['TglLahir'] = $data['TglLahir'];
            $_SESSION['NIK'] = $data['NIK'];

            $_SESSION['WargaNegara'] = $data['WargaNegara'];
            $_SESSION['Email'] = $data['Email'];
            $_SESSION['NoHP'] = $data['NoHP'];
        
            $_SESSION['Alamat'] = $data['Alamat'];
            $_SESSION['KodePos'] = $data['KodePos'];
            $_SESSION['NamaFoto'] = $data['NamaFoto'];

            $_SESSION['Username'] = $data['Username'];

            header('Location: home.php');
        }
        else{
            $_SESSION['regisMsg'] = 'Login Gagal!';
            header('Location: welcome.php');
        }
        
    }
?>