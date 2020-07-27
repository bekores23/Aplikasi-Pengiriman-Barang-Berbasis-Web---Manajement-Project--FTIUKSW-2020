<?php
include '../query/config.php';
$file = "../../database/transaction.json";
session_start();

//onProcess
$id = $_REQUEST["q"];
$status = $_REQUEST["r"];
$id2 = strval($id);
$status2 = strval($status);
$array = read_file('transaction');

if($status2=='Transit'){
    foreach($array as $key => $d){
        if($d['Resi']==$id2){
            $array[$key]['Status']='onTransit';
        }
    }
    $jsonfile = json_encode($array, JSON_PRETTY_PRINT);
    $insert =file_put_contents($file,$jsonfile);
    
    for($i = 0; $i < count($array); $i++){
        if ($array[$i]['Resi'] == $id) {
            $arrayinput = array(
                'Tanggal' => date("d-m-Y"),
                'Waktu' => date("h:i:sa"),
                'Cabang' => $_SESSION['id_cabang'],
                'Status' => 'Transit',
                'Pesan' => 'Barang sudah sampai di '.$_SESSION['id_cabang']
            );
    
            array_push($array[$i]['Transaksi'], $arrayinput);
            $jsonfile = json_encode($array, JSON_PRETTY_PRINT);
            $insert =file_put_contents($file,$jsonfile);
        }
    }
}else{
    foreach($array as $key => $d){
        if($d['Resi']==$id2){
            $array[$key]['Status']='onDestination';
        }
    }
    $jsonfile = json_encode($array, JSON_PRETTY_PRINT);
    $insert =file_put_contents($file,$jsonfile);
    
    for($i = 0; $i < count($array); $i++){
        if ($array[$i]['Resi'] == $id) {
            $arrayinput = array(
                'Tanggal' => date("d-m-Y"),
                'Waktu' => date("h:i:sa"),
                'Cabang' => $_SESSION['id_cabang'],
                'Status' => 'Destination',
                'Pesan' => 'Barang sudah sampai di '.$_SESSION['id_cabang']
            );
    
            array_push($array[$i]['Transaksi'], $arrayinput);
            $jsonfile = json_encode($array, JSON_PRETTY_PRINT);
            $insert =file_put_contents($file,$jsonfile);
        }
    }
}




?>