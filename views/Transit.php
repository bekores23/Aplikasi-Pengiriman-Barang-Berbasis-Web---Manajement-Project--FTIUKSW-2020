<?php
session_start();
if (!isset($_SESSION['id_cabang'])) {
    header('Location: /jasapengiriman/views/login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>JDK Express</title>
    <link href="css/styles.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous">
    </script>
</head>

<body class="sb-nav-fixed" onload="startTime()">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <a class="navbar-brand" href="">JDK Express</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
        <!-- Navbar-->
        <ul class="navbar-nav d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="../control/adminLogin/logout.php">Logout</a>
                </div>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Administrator</div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengiriman" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-truck"></i></div>
                            Pengiriman
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePengiriman" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="home.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>Buat Pengiriman
                                </a>
                                <a class="nav-link" href="cabanghistori.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-plus"></i></div>Histori Cabang
                                </a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArmada" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-map"></i></div>
                            Tracking
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseArmada" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="manifest.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-paper-plane"></i></div>Manifest
                                </a>
                                <a class="nav-link" href="perjalanan.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>Perjalanan
                                </a>
                                <a class="nav-link" href="transit.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-retweet"></i></div>Transit
                                </a>
                                <a class="nav-link" href="destinasi.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-flag"></i></div>Sampai Destinasi
                                </a>
                                <a class="nav-link" href="diterima.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-check"></i></div>Diterima
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Cabang:</div>
                    <?php echo $_SESSION['id_cabang']; ?>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <!-- haritanggal -->
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-11">
                            <h5 id="date"></h5>
                        </div>
                        <div class="col-md-1">
                            <h5 id="time"></h5>
                        </div>
                    </div>
                    <!-- selesaiharitanggal -->

                    <h1 class="mt-4"><i class="fas fa-truck"></i> Pengiriman</h1>
                    <ol class="breadcrumb mb-4"><i class="fas fa-paper-plane" ></i>Data Transit</ol>
                    <!-- isi - isi -->
                    <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>List Data Transit</div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Resi</th>
                                            <th>Hari</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Pengiriman</th>
                                            <th>Packaging</th>
                                            <th>Berat(Kg)</th>
                                            <th>Cabang Tujuan</th>
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Resi</th>
                                            <th>Hari</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Pengiriman</th>
                                            <th>Packaging</th>
                                            <th>Berat(Kg)</th>
                                            <th>Cabang Tujuan</th>
                                            <th>Fungsi</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $database2 = json_decode(file_get_contents("../database/transaction.json"),true);
                                        foreach ($database2 as $key) {  
                                            if($key['Status']=='onTransit'){
                                    ?>
                                        <tr>
                                            <td><a href="<?php echo 'detail.php?data='.$key['Resi'].''?>"><?php echo $key['Resi'];?></a></td>
                                            <td><?php echo $key['Hari']?></td>
                                            <td><?php echo $key['Tanggal']?></td>
                                            <td><?php echo $key['Waktu']?></td>
                                            <td><?php echo $key['Jnspengiriman']?></td>
                                            <td><?php echo $key['Jnspengemasan'];?></td>
                                            <td><?php echo $key['Berat'];?></td>
                                            <td><?php echo $key['CabangTujuan'];?></td>
                                            <td><button onclick="onProcess(this)" class="btn btn-success">Berangkat</button></td>
                                        </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    </div>
                    <!-- isi isi selesai -->
                </div>
            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Hak Cipta &copy; JDK Express 2020</div>
                        <div>
                            <a href="#">Kebijakan Privasi</a> &middot;
                            <a href="#">Syarat &amp; Ketentuan</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script>
        function startTime() {
            var today = new Date();
            var year = today.getFullYear();
            var month = today.getMonth() + 1;
            var date = today.getDate();
            var day = today.getDay();
            var h = today.getHours();
            var m = today.getMinutes();
            var s = today.getSeconds();
            var days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
            month = checkTime(month);
            date = checkTime(date);
            h = checkTime(h);
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById('date').innerHTML = days[day] + ", " + date + "/" + month + "/" + year;
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
            var t = setTimeout(startTime, 500);
        }

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i
            };
            return i;
        }

        function onProcess(str){
            var i = str.parentNode.parentNode.rowIndex;
            var ids = document.getElementById("dataTable").rows[i].cells.item(0).innerHTML;
            var id = ids.substring(25, 37);
            if (str.length != 0) {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    //document.getElementById("dataTable").innerHTML = this.responseText;
                    location.reload();
                    }
                };
                xmlhttp.open("GET", "http://localhost/jasapengiriman/control/function/update_manifest.php?q=" + id, true);
                xmlhttp.send();
            } 
        } 

        
   
           
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/datatables-demo.js"></script>
</body>

</html>