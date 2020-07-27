<?php
include '../../database/Transaction.php';
include '../../database/Tracking.php';
include '../query/config.php';
session_start();

$array = read_file('transaction');
$transarray[] = array(
    'Tanggal' => $_SESSION['transaction']->getTanggal(),
    'Waktu' => $_SESSION['transaction']->getWaktu(),
    'Cabang' => $_SESSION['transaction']->getKota_asal(),
    'Status' => $_SESSION['transaction']->getStatus(),
    'Pesan' => $_SESSION['transaction']->getStatus() . ' di ' . $_SESSION['transaction']->getKota_asal()
);
$array[] = array(
    'Resi' => $_SESSION['transaction']->getKode_resi(),
    'Hari' => $_SESSION['transaction']->getHari(),
    'Tanggal' => $_SESSION['transaction']->getTanggal(),
    'Waktu' => $_SESSION['transaction']->getWaktu(),
    'CabangAsal' => $_SESSION['transaction']->getKota_asal(),
    'CabangTujuan' => $_SESSION['transaction']->getKota_tujuan(),
    'NamaPengirim' => $_SESSION['transaction']->getNama_pengirim(),
    'AlamatPengirim' => $_SESSION['transaction']->getAlamat_pengirim(),
    'NoPengirim' => $_SESSION['transaction']->getNo_pengirim(),
    'NamaPenerima' => $_SESSION['transaction']->getNama_penerima(),
    'AlamatPenerima' => $_SESSION['transaction']->getAlamat_penerima(),
    'NoPenerima' => $_SESSION['transaction']->getNo_penerima(),
    'Berat' => $_SESSION['transaction']->getBerat(),
    'Deskripsi' => $_SESSION['transaction']->getDeskripsi(),
    'Jnspengemasan' => $_SESSION['transaction']->getJnspengemasan(),
    'Jnspengiriman' => $_SESSION['transaction']->getJnspengiriman(),
    'Biaya' => $_SESSION['transaction']->getBiaya(),
    'Status' => $_SESSION['transaction']->getStatus(),
    'Transaksi' => $transarray
);

$db = '../../database/transaction.json';
$data = json_encode($array, JSON_PRETTY_PRINT);
// Menyimpan data ke dalam anggota.json
file_put_contents($db, $data);

unset($_SESSION['transaction']);
setcookie('fnpengirim', "", time() - 120, "/");
setcookie('adpengirim', "", time() - 120, "/");
setcookie('nopengirim', "", time() - 120, "/");
setcookie('fnpenerima', "", time() - 120, "/");
setcookie('adpenerima', "", time() - 120, "/");
setcookie('nopenerima', "", time() - 120, "/");
setcookie('itemdesc', "", time() - 120, "/");
header("Location: ../../views/home.php");
