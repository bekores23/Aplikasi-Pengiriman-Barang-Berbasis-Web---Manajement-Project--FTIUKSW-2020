<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body {
            background-image: url("bg_img.jpg");
            padding: 0;
            margin: 0;
            padding: 0;
            margin: 0;
            height: 100vh;
            position: static;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>

    <div class="container-fluid" style="padding: 3vh;">
        <div class="d-flex justify-content-center">
            <h1 style="color: white;">Jdk Express</h1>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header" style="text-align: center;"><strong>
                            <h3>Track Pengiriman</h3>
                            <h5>Kode Resi: <?php echo $_POST['resiinput']; ?></h5>
                        </strong></div>
                    <div class="card-body">
                        <ul class="list-group">
                            <?php
                                include '../control/query/config.php';
                                $array = read_file('transaction');
                                $exist = false;
                                for($i = 0; $i < count($array); $i++){
                                    if ($array[$i]['Resi'] == $_POST['resiinput']) {
                                        for($j = 0; $j < count($array[$i]['Transaksi']); $j++){
                                            echo "<li class='list-group-item'>";
                                            echo "<div class='row'>";
                                            echo "<div class='col-md-4'>";
                                            echo "<strong>".$array[$i]['Transaksi'][$j]['Tanggal']. "<br>";
                                            echo $array[$i]['Transaksi'][$j]['Waktu'] . "</strong>";
                                            echo "</div>";
                                            echo "<div class='col-md-8'>";
                                            echo $array[$i]['Transaksi'][$j]['Pesan'];
                                            echo "</div>";
                                            echo "</div>";
                                            echo "</li>";
                                        }
                                        $exist = true;
                                        break;
                                    }
                                }
                                if($exist == false){
                                    echo "<center><strong style='color: red;'>Kode Resi ".$_POST['resiinput']. " tidak tersedia!</strong></center>";
                                }
                            ?>
                            <!-- <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li> -->
                        </ul>
                        <br>
                        <div class="btn-group btn-group-lg" role="group" aria-label="Basic example" style="float: right; margin-bottom: 20px;">
                            <button class="btn btn-danger" onclick="goBack()">Kembali</button>
                            <button class="btn btn-secondary" onclick="refresh()">Refresh</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script>
        function goBack() {
            window.history.back();
        }
        function refresh() {
            location.reload();
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>