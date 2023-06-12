<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Dashboard - Adventure Works</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">Adventure Works</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#!">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                            Pages
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="sb-sidenav-menu-heading">Measure</div>

                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Total Pendapatan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="soal1.php">Kategori Produk </a>
                                <a class="nav-link" href="soal2.php">Total Pendapatan</a>
                                <a class="nav-link" href="soal3.php">Total Pendapatan Tiap Negara</a>
                                <a class="nav-link" href="soal5.php">Perbandingan Total Pendapatan Tiap Tahun</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                            Luasan Penjualan
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="soal6.php">Jumlah Unit Terjual Pertahun</a>
                                <a class="nav-link" href="soal7.php">Total Penjualan Tiap Negara</a>
                                <a class="nav-link" href="soal8.php">Total Penjualan Kategori Barang Tiap Tahun</a>
                                <a class="nav-link" href="soal9.php">Total Tiap Produk di Canada </a>
                                <a class="nav-link" href="soal10.php">Jumlah Kategori Yang Tersedia</a>
                            </nav>
                        </div>
                        <div class="sb-sidenav-menu-heading">Mondrian</div>

                        <a class="nav-link" href="cube.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Cube
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    Start Bootstrap
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Total Pendapatan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php
                                                $host       = "localhost";
                                                $user       = "root";
                                                $password   = "";
                                                $database   = "advw";
                                                $mysqli     = mysqli_connect($host, $user, $password, $database);
                                                    $sql = "SELECT COUNT(ProductID) as jumlah_cust from dim_product";
                                                    $sql = "SELECT SUM(revenue) as revenue from fact_revenue";
                                                 $query = mysqli_query($mysqli,$sql);
                                                 while($row2=mysqli_fetch_array($query)){
                                                    echo "$".number_format($row2['revenue'],0,".",",");
                                                 }
                                                    ?>
                                            </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Total Penjualan</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <?php
                                         $host       = "localhost";
                                         $user       = "root";
                                         $password   = "";
                                         $database   = "advw";
                                         $mysqli     = mysqli_connect($host, $user, $password, $database);

                                         $sql = "SELECT COUNT(CustomerID) as jumlah_transaksi from fact_sales";
                                            $query = mysqli_query($mysqli,$sql);
                                                 while($row2=mysqli_fetch_array($query)){
                                                    echo number_format($row2['jumlah_transaksi'],0,".",",");
                                                 }
                                                 ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Total Produk</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                     <?php
                                               $host       = "localhost";
                                               $user       = "root";
                                               $password   = "";
                                               $database   = "advw";
                                               $mysqli     = mysqli_connect($host, $user, $password, $database);
                                                    $sql = "SELECT COUNT(ProductID) as jumlah_cust from dim_product";
                                                     $query = mysqli_query($mysqli,$sql);
                                                        while($row2=mysqli_fetch_array($query)){
                                                            echo number_format($row2['jumlah_cust'],0,".",",");
                                                        }
                                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area me-1"></i>
                                        Line Chart Example
                                    </div>
                                    <?php
                    include 'koneksi.php';
                    $mainQuery = "SELECT * FROM salestahun";
                    $mainResult = $conn->query($mainQuery);
                    $mainData = array();

                    if ($mainResult->num_rows > 0) {
                        while ($row = $mainResult->fetch_assoc()) {
                            $mainData[] = array(
                                'name' => $row['tahun'],
                                'y' => floatval($row['OrderQty']),
                            );
                        }
                    }

                    $conn->close();
                    ?>

                    <div class="card-body">
                        <!DOCTYPE html>
                        <html>

                        <head>
                            <meta charset="utf-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1">
                            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
                            <title></title>
                            <script type="text/javascript">
                                var mainChartData = <?php echo json_encode($mainData); ?>;

                                $(function() {
                                    var chart;
                                    $(document).ready(function() {
                                        chart = new Highcharts.Chart({
                                            chart: {
                                                renderTo: 'mygraph',
                                                type: 'line'
                                            },
                                            title: {
                                                text: 'Jumlah Unit Terjual Pertahun'
                                            },
                                            subtitle: {
                                                text: ''
                                            },
                                            xAxis: {
                                                categories: <?php echo json_encode(array_column($mainData, 'name')); ?>
                                            },
                                            yAxis: {
                                                title: {
                                                    text: 'Jumlah'
                                                },
                                                plotLines: [{
                                                    value: 0,
                                                    width: 1,
                                                    color: '#808080'
                                                }]
                                            },
                                            tooltip: {
                                                formatter: function() {
                                                    return '<b>' + this.series.name + '</b><br/>' +
                                                        this.x + ': ' + this.y;
                                                }
                                            },
                                            legend: {
                                                layout: 'vertical',
                                                align: 'right',
                                                verticalAlign: 'top',
                                                x: -10,
                                                y: 120,
                                                borderWidth: 0
                                            },
                                            series: [{
                                                name: 'Pendapatan',
                                                data: <?php echo json_encode(array_column($mainData, 'y')); ?>
                                            }]
                                        });
                                    });
                                });
                            </script>
                            <script src="https://cdnjs.cloudflare.com/ajax/libs/highcharts/11.0.1/highcharts.js" integrity="sha512-bdh59dK4gjyd/T+ptbOau3WEjtNLRy1eWtYkAfv2PCQODTaN2XXLVWKGQbPLbd5JB1Gn1oStmblZMSgXY29nrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/amcharts/3.21.15/plugins/export/export.js"></script>
                        </head>

                        <body>
                            <div class="container" style="margin-top: 20px">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div id="mygraph"></div>
                                    </div>
                                </div>
                            </div>
                        </body>

                        </html>

                                </div>
                            </div>

                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <!-- Isi tables -->
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
