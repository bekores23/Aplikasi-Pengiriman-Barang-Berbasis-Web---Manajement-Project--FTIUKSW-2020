<?php
include '../query/config.php';
$file = "../../database/transaction.json";
session_start();

//onProcess
$id = $_REQUEST["q"];
$id2 = strval($id);
$array = read_file('transaction');


foreach ($array as $key => $d) {
    if ($d['Resi'] == $id2) {
        $array[$key]['Status'] = 'onProcess';
    }
}
$jsonfile = json_encode($array, JSON_PRETTY_PRINT);
$insert = file_put_contents($file, $jsonfile);

for ($i = 0; $i < count($array); $i++) {
    if ($array[$i]['Resi'] == $id) {
        $arrayinput = array(
            'Tanggal' => date("d-m-Y"),
            'Waktu' => date("h:i:sa"),
            'Cabang' => $_SESSION['id_cabang'],
            'Status' => 'Sedang Perjalanan',
            'Pesan' => 'Sedang Perjalanan'
        );

        array_push($array[$i]['Transaksi'], $arrayinput);
        $jsonfile = json_encode($array, JSON_PRETTY_PRINT);
        $insert = file_put_contents($file, $jsonfile);
    }
}
?>