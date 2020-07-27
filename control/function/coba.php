<?php
include '../query/config.php';
$file = "../../database/transaction.json";
//$id = $_REQUEST["q"];
$id = '618C3AA1CA5C';
$array = read_file('transaction');
session_start();

for($i = 0; $i < count($array); $i++){
    if ($array[$i]['Resi'] == $id) {
        $arrayinput = array(
            'Tanggal' => date("dd-mm-YYYY"),
            'Waktu' => date("h:i:sa"),
            'Cabang' => $_SESSION['id_cabang'],
            'Status' => 'Sedang',
            'Pesan' => 'Sedang Perjalanan'
        );

        array_push($array[$i]['Transaksi'], $arrayinput);
        $jsonfile = json_encode($array, JSON_PRETTY_PRINT);
        $insert =file_put_contents($file,$jsonfile);
    }
}

// foreach($array as $key){
//     if($key['Resi']==$id){
        // $array[$id]['Transaksi']=array(
        //     'Tanggal' => date("dd-mm-YYYY"),
        //     'Waktu' => date("h:i:sa"),
        //     'Cabang' => $_SESSION['id_cabang'],
        //     'Status' => 'Sedang',
        //     'Pesan' => 'Sedang Perjalanan'
        // );
//         array_push($array[])
        $jsonfile = json_encode($array, JSON_PRETTY_PRINT);
        $insert =file_put_contents($file,$jsonfile);
//     }
// }




?>