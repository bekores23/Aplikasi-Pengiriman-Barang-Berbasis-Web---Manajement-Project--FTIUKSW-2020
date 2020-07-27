<?php
    session_start();
    unset($_SESSION['id_cabang']);
    unset($_SESSION['error']);
    unset($_SESSION['transaction']);
    setcookie('fnpengirim', "", time() - 120, "/");
    setcookie('adpengirim', "", time() - 120, "/");
    setcookie('nopengirim', "", time() - 120, "/");
    setcookie('fnpenerima', "", time() - 120, "/");
    setcookie('adpenerima', "", time() - 120, "/");
    setcookie('nopenerima', "", time() - 120, "/");
    setcookie('itemdesc', "", time() - 120, "/");
    header('Location: ../../views/login.php');
?>