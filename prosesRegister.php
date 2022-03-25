<?php
    session_start();

    if(isset($_POST['submit'])){

        $_SESSION['message'] = '';

        $NIK = $_POST['NIK'];
        if (strlen($NIK) != 16){
            $_SESSION['message'] .= 'NIK tidak valid <br/>';
        } 
        else 
            $_SESSION['NIK'] = $NIK;

        $NoHP = $_POST['NoHP'];
        if (strlen($NoHP) < 10 || !is_numeric($NoHP)){
            $_SESSION['message'] .= 'No HP tidak valid <br/>';
        } 
        else 
            $_SESSION['NoHP'] = $NoHP;

        $KodePos = $_POST['KodePos'];
        if (strlen($KodePos) != 5){
            $_SESSION['message'] .= 'Kode Pos harus 5 digit <br/>';
        } 
        else 
            $_SESSION['KodePos'] = $KodePos;

        $Password1 = $_POST['Password1'];
        $Password2 = $_POST['Password2'];
        if ($Password1 != $Password2){
            $_SESSION['message'] .= 'Password 1 tidak sama dengan Password 2';
        } 
        else 
            $_SESSION['Password'] = $Password1;


        if($_SESSION['message']!==''){
            header('Location: register.php');
        }
        else{
            $namaFile = $_FILES['FotoProfil']['name'];
            $tmp_name = $_FILES['FotoProfil']['tmp_name'];
            $dirUpload = "foto/";
            $terupload = move_uploaded_file($tmp_name, $dirUpload.$namaFile);
    
            $_SESSION['NamaDepan'] = $_POST['NamaDepan'];
            $_SESSION['NamaTengah'] = $_POST['NamaTengah'];
            $_SESSION['NamaBelakang'] = $_POST['NamaBelakang'];
    
            $_SESSION['TempatLahir'] = $_POST['TempatLahir'];
            $_SESSION['TglLahir'] = $_POST['TglLahir'];
            //$_SESSION['NIK'] = $_POST['NIK'];
    
            $_SESSION['WargaNegara'] = $_POST['WargaNegara'];
            $_SESSION['Email'] = $_POST['Email'];
            //$_SESSION['NoHP'] = $_POST['NoHP'];
    
            $_SESSION['Alamat'] = $_POST['Alamat'];
            //$_SESSION['KodePos'] = $_POST['KodePos'];
            $_SESSION['FotoProfil'] = $namaFile;

            $_SESSION['Username'] = $_POST['Username'];

            $_SESSION['regisMsg'] = "Register Berhasil! Silahkan Login.";

            header('Location: welcome.php');
        }

        
    }

?>