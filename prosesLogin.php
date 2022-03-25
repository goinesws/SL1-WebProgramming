<?php
    session_start();
    if(isset($_POST['submit'])){
        if(isset($_SESSION)){
            if(($_POST['usernameLogin'] == $_SESSION['Username']) && ($_POST['passwordLogin'] == $_SESSION['Password'])){
                header('Location:home.php');
            } else{
                $_SESSION['regisMsg'] = "Login gagal, mohon Login ulang.";
                header('Location:welcome.php');
            }
        }
    }
?>