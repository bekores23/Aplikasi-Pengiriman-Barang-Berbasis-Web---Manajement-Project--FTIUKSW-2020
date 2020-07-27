<?php
    include '../query/config.php';
    session_start();
    $id_cabang = $_POST['id_cabang'];
    $kata_sandi = $_POST['kata_sandi'];
    // $content = file_get_contents('../../database/db.json');
    $array = read_file('admin');
    $exist = false;
    $kata_sandi_data = '';
    $cabang = '';
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i]['id'] == $id_cabang) {
            $exist = true;
            $kata_sandi_data = $array[$i]['password'];
            $cabang = $array[$i]['branch'];
            break;
        } else {
            continue;
        }
    }
    if ($exist) {
        if ($kata_sandi == $kata_sandi_data) {
            $_SESSION['id_cabang'] = $cabang;
            header('Location: ../../views/home.php');
        } else {
            $_SESSION['error'] = 'Id cabang atau password salah!';
            header('Location: ../../views/login.php');
        }
    } else {
        $_SESSION['error'] = 'Id cabang atau password salah!';
        header('Location: ../../views/login.php');
    }
?>