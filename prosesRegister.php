<?php
    session_start();
    include('config.php');

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
            $_SESSION['message'] .= 'Password 1 tidak sama dengan Password 2 <br/>';
        } 
        else 
            $_SESSION['Password'] = $Password1;


        if($_SESSION['message']!==''){
            header('Location: register.php');
        }

        else{
            $Email = $_POST['Email'];
            $NoHP = $_POST['NoHP'];
            $Username = $_POST['Username'];
            $NIK = $_POST['NIK'];
            

            $_SESSION['regisMsg'] = "Register Berhasil! Silahkan Login.";

            $result = mysqli_query($connection, "SELECT * FROM profile WHERE Username = '{$Username}'");
            if(!$result->num_rows == 0) {
                $_SESSION['message'] .= 'Username sudah diambil, mohon pilih yang lain <br/>';
            }

            $result = mysqli_query($connection, "SELECT * FROM profile WHERE Email = '{$Email}'");
            if(!$result->num_rows == 0) {
                $_SESSION['message'] .= 'Email sudah diambil, mohon pilih yang lain <br/>';
            }

            $result = mysqli_query($connection, "SELECT * FROM profile WHERE NoHP = '{$NoHP}'");
            if(!$result->num_rows == 0) {
                $_SESSION['message'] .= 'Nomor HP sudah diambil, mohon pilih yang lain <br/>';
            }

            $result = mysqli_query($connection, "SELECT * FROM profile WHERE NIK = '{$NIK}'");
            if(!$result->num_rows == 0) {
                $_SESSION['message'] .= 'NIK sudah diambil, mohon pilih yang lain <br/>';
            }

            if($_SESSION['message']!==''){
                header('Location: register.php');
            }

            else{
                $NamaFile = $_FILES['FotoProfil']['name'];
                $tmp_name = $_FILES['FotoProfil']['tmp_name'];
                $dirUpload = "foto/";
                $terupload = move_uploaded_file($tmp_name, $dirUpload.$NamaFile);
        
                $NamaDepan = $_POST['NamaDepan'];;
                $NamaTengah = $_POST['NamaTengah'];;
                $NamaBelakang = $_POST['NamaBelakang'];;
        
                $TempatLahir = $_POST['TempatLahir'];;
                $TglLahir = $_POST['TglLahir'];;
                //$NIK = $_POST['NIK'];;
        
                $WargaNegara = $_POST['WargaNegara'];;
                //$Email = $_POST['Email'];;
                //$NoHP = $_POST['NoHP'];;
        
                $Alamat = $_POST['Alamat'];;
                $KodePos = $_POST['KodePos'];;
                //$NamaFile = $_POST['NamaFile'];;
    
                //$Username = $_POST['Username'];;

                $str_query = 'insert into profile values("'.$NamaDepan.'","'.$NamaTengah.'","'.$NamaBelakang.'","'.$TempatLahir.'","'.$TglLahir.'","'.$NIK.'","'.$WargaNegara.'","'.$Email.'","'.$NoHP.'","'.$Alamat.'","'.$KodePos.'","'.$NamaFile.'","'.$Username.'","'.$Password1.'")';
                if(mysqli_query($connection, $str_query)) {
                    $_SESSION['regisMsg'] = "Register Berhasil! Silahkan Login.";
                    header('Location: welcome.php');
                } else {
                    echo 'daftar gagal! <br/>'.mysqli_error($connection);
                }
            }

            
        }
   
    }
?>