<?php
include "cek_login.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

<style>
            div.scrollmenu {
                background-color: #333;
                overflow: auto;
                white-space: nowrap;
            }

            div.scrollmenu a {
                display: inline-block;
                color: white;
                text-align: center;
                padding: 14px;
                text-decoration: none;
            }

            div.scrollmenu a:hover {
                background-color: #777;
            }
</style>
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="Absensi.php">
                                <i class="fas fa-table"></i>Absensi</a>
                        </li>
                       
                    </ul>
                </div>          
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                <img src="images/logo.png" alt="" style="height:50px; width:150px;"/>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>
                        <li>
                            <a href="Absensi.php">
                            <i class="fas fa-table"></i>Absensi</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                            </form>
                            <div class="">
                                <div class="">
                                    <div class="">
                                       
                                        <div class="button">
                                            <button class="btn btn-secondary" type="button">
                                            <a class="js-acc-btn" href="logout.php" style="color: #fff">Logout</a>
                                            </button>
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p100">
                    <div class="container-fluid">
                         <div class="row m-t-30">
                            <div class="col-md-12">
                                <!-- DATA TABLE-->
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                        <div class="rs-select2--light rs-select2--md">
                                              <h3 class="">Absensi</h3>
                              
                                           
                                        </div>
                                        <div class="rs-select2--light rs-select2--sm">
                                            
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                       
                                    </div>
                                    <div class="table-data__tool-right">
                                       
                                            <a href="addAbsensi.php" style="color: white;">
                                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i> add item
                                            </button>
                                            </a>
                                    
                                        
                                    </div>
                                </div>
                                <form action="" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="cari_nis" placeholder="Cari NIS " class="form-control">
                                    <div class="input-group-append">
                                        <input type="submit" name="submit_nis" value="Cari" class="btn btn-outline-secondary">
                                    </div>
                                </div>
                                </form>
                                <form method="post">
                                <div class="input-group mb-3">
                                    <!-- <input type="text" name="cari" placeholder="Cari NIS " class="form-control">
                                     -->
                                     <select name="cari" class="form-control" placeholder="cari">
                                     <option value="">Kelas</option>
                                     <?php
                                        
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi,"SELECT * FROM `kelas`");
                                            while($d = mysqli_fetch_array($data)){
                                                $kelas = $d['kelas'];
                                               
                                                echo "<option>$kelas</option>";
                                            }
                                        ?>
                                                
                                               
                                    </select>
                                    <select name="tanggal" class="form-control" placeholder="semester">
                                                <option value="tanggal">tanggal</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option>
                                                </select>
                                    <select name="bulan" class="form-control" placeholder="bulan">
                                                <option value="bulan">Bulan</option>
                                                <option value="Januari">Januari</option>
                                                <option value="Febuari">Febuari</option>
                                                <option value="Maret">Maret</option>
                                                <option value="April">April</option>
                                                <option value="Mei">Mei</option>
                                                <option value="Juni">Juni</option>
                                                <option value="Juli">Juli</option>
                                                <option value="Agustus">Agustus</option>
                                                <option value="Oktober">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="Desember">Desember</option>
                                               
                                                </select>
                                    <select name="tahun" class="form-control" placeholder="tahun">
                                                <option value="tahun">Tahun</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                               
                                                </select>
                                   



                                    <div class="input-group-append">

                                        <input type="submit" name="submit" value="Cari" class="btn btn-outline-secondary">
                                    </div>
                                </div>
                                <div class="scrollmenu">
                               
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>Id </th>
                                                <th>NIS</th>
                                                <th>Kelas</th>
                                                <th>Semester</th>
                                                <th>Tahun</th>
                                                <th>Bulan</th>
                                                <th>Tanggal</th>
                                                <th>Jam</th>
                                                <th>Status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <?php
                                         if(!ISSET($_POST['submit'])){
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi,"SELECT * FROM `absensi`");
                                            while($d = mysqli_fetch_array($data)){
                                        ?>
                                        <tbody>
                                        
                                            
                                            <?php 
                                            }}
                                            ?>

                                             <?php if (ISSET($_POST['submit'])){
                                                $cari = $_POST['cari'];
                                                $tanggal = $_POST['tanggal'];
                                                $bulan = $_POST['bulan'];
                                                $tahun = $_POST['tahun'];
                                               
                                                $query2 = "SELECT * FROM absensi WHERE kelas LIKE '%$cari%' AND tanggal  LIKE '%$tanggal%' AND bulan LIKE '%$bulan%' AND 
                                                                                                            tahun LIKE '%$tahun%'";
                                                
                                                $sql = mysqli_query($koneksi, $query2);
                                                while ($d = mysqli_fetch_array($sql)){
                                                ?>
                                                 <tr>
                                                 <td><?php echo $d['id']; ?></td>
                                                 <td><?php echo $d['nis']; ?></td>
                                                 <td><?php echo $d['kelas']; ?></td>
                                                 <td><?php echo $d['semester']; ?></td>
                                                 <td><?php echo $d['tahun']; ?></td>
                                                 <td><?php echo $d['bulan']; ?></td>
                                                 <td><?php echo $d['tanggal']; ?></td>
                                                 <td><?php echo $d['jam']; ?></td>
                                                 <td><?php echo $d['status']; ?></td>

                                                 <td>
                                                     <div class="table-data-feature">
                                                        <a href="EditAbsensi.php?id=<?php echo $d['id']?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        </a>
                                                        <a href="deleteAbsensi.php?id=<?php echo $d['id']?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                 </td>    
                                            </tr>

                                            <?php }} ?>
                                            
                                            <?php if (ISSET($_POST['submit_nis'])){
                                                $cari_nis = $_POST['cari_nis'];
                                                
                                                $query3 = "SELECT * FROM absensi WHERE nis LIKE '%$cari_nis%' ";
                                                
                                                $sql = mysqli_query($koneksi, $query3);
                                                while ($d = mysqli_fetch_array($sql)){
                                                ?>
                                                 <tr>
                                                 <td><?php echo $d['id']; ?></td>
                                                 <td><?php echo $d['nis']; ?></td>
                                                 <td><?php echo $d['kelas']; ?></td>
                                                 <td><?php echo $d['semester']; ?></td>
                                                 <td><?php echo $d['tahun']; ?></td>
                                                 <td><?php echo $d['bulan']; ?></td>
                                                 <td><?php echo $d['tanggal']; ?></td>
                                                 <td><?php echo $d['jam']; ?></td>
                                                 <td><?php echo $d['status']; ?></td>

                                                 <td>
                                                     <div class="table-data-feature">
                                                        <a href="EditAbsensi.php?id=<?php echo $d['id']?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <i class="zmdi zmdi-edit"></i>
                                                        </button>
                                                        </a>
                                                        <a href="deleteAbsensi.php?id=<?php echo $d['id']?>">
                                                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                        </a>
                                                    </div>
                                                 </td>    
                                            </tr>

                                            <?php }} ?>

                                        </tbody>
                                    </table>
                                </div>
                                </div>
                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>
                           
                            
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
