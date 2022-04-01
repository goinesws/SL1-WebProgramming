<?php
    session_start();
    include('config.php');

    if(isset($_POST['edit'])){

        $_SESSION['editMsg'] = '';

        $NIK = $_POST['NIK'];
        if (strlen($NIK) != 16){
            $_SESSION['editMsg'] .= 'NIK tidak valid <br/>';
        } 
        else 
            $_SESSION['NIK'] = $NIK;

        $NoHP = $_POST['NoHP'];
        if (strlen($NoHP) < 10 || !is_numeric($NoHP)){
            $_SESSION['editMsg'] .= 'No HP tidak valid <br/>';
        } 
        else 
            $_SESSION['NoHP'] = $NoHP;

        $KodePos = $_POST['KodePos'];
        if (strlen($KodePos) != 5){
            $_SESSION['editMsg'] .= 'Kode Pos harus 5 digit <br/>';
        } 
        else 
            $_SESSION['KodePos'] = $KodePos;


        if($_SESSION['editMsg']!==''){
            header('Location: editProfile.php');
        }

        else{
            $Email = $_POST['Email'];
            $NoHP = $_POST['NoHP'];
            $NIK = $_POST['NIK'];


            $result = mysqli_query($connection, "SELECT * FROM profile WHERE Email = '{$Email}'");
            $data = mysqli_fetch_assoc($result);
            if(!$result->num_rows == 0 && $data['Username']!=$_SESSION['Username']) {
                $_SESSION['editMsg'] .= 'Email sudah diambil, mohon pilih yang lain <br/>';
            }

            $result = mysqli_query($connection, "SELECT * FROM profile WHERE NoHP = '{$NoHP}'");
            if(!$result->num_rows == 0 && $data['Username']!=$_SESSION['Username']) {
                $_SESSION['editMsg'] .= 'Nomor HP sudah diambil, mohon pilih yang lain <br/>';
            }

            $result = mysqli_query($connection, "SELECT * FROM profile WHERE NIK = '{$NIK}'");
            if(!$result->num_rows == 0 && $data['Username']!=$_SESSION['Username']) {
                $_SESSION['editMsg'] .= 'NIK sudah diambil, mohon pilih yang lain <br/>';
            }

            if($_SESSION['editMsg']!==''){
                header('Location: editProfile.php');
            }

            else{
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


                //need to check if theres any image uploaded
                if ($_FILES['FotoProfil']['size'] > 0) {
                    $NamaFile = $_FILES['FotoProfil']['name'];
                    $tmp_name = $_FILES['FotoProfil']['tmp_name'];
                    $dirUpload = "foto/";
                    $terupload = move_uploaded_file($tmp_name, $dirUpload.$NamaFile);
                }
                else{
                    $NamaFile = $_SESSION['NamaFoto'];
                }

                $str_query = 'update profile set NamaDepan="'.$NamaDepan.'", NamaTengah = "'.$NamaTengah.'", NamaBelakang = "'.$NamaBelakang.'"
                , TempatLahir = "'.$TempatLahir.'", TglLahir = "'.$TglLahir.'", NIK = "'.$NIK.'" 
                , WargaNegara = "'.$WargaNegara.'", Email = "'.$Email.'", NoHP = "'.$NoHP.'" 
                , Alamat = "'.$Alamat.'", KodePos = "'.$KodePos.'", NamaFoto = "'.$NamaFile.'" 
                where Username = "'.$_SESSION['Username'].'"';

                

                if(mysqli_query($connection, $str_query)) {
                    header('Location: profile.php');
                } else {
                    $_SESSION['editMsg'] = 'Edit data gagal, mohon dicoba kembali';
                    header('Location: editProfile.php');
                }
            }

            
        }
   
    }
?>