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

</head>

<body class="">
    <div class="">
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
                                <i class="fas fa-tachometer-alt"></i>Dashboard </a>
                            
                        </li>
                        <li>
                            <a href="Absensi.php">
                                <i class="fas fa-table"></i>Absensi</a>
                        </li>
                        <li>
                            <a href="Belajar.php">
                            <i class="fas fa-graduation-cap"></i>Belajar</a>
                        </li>
                        <li>
                            <a href="Berita.php">
                            <i class="far fa-newspaper"></i>Berita</a>
                        </li>
                        
                        <li>
                            <a href="ImageSlider.php">
                            <i class="far fa-images"></i>Image slider</a>
                        </li>
                        <li>
                            <a href="Informasi.php">
                            <i class="fas fa-info"></i>Informasi</a>
                        </li>
                        <li>
                            <a href="Jadwal.php">
                            <i class="fas fa-clipboard-list"></i>Jadwal</a>
                        </li>
                        <li>
                            <a href="Nilai.php">
                            <i class="fas fa-list-ol"></i>Nilai</a>
                        </li>
                        <li>
                            <a href="Pembayaran.php">
                            <i class="far fa-money-bill-alt"></i>Pembayaran</a>
                        </li>
                        <li>
                            <a href="Users.php">
                            <i class="far fa-user"></i>Users</a>
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
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                               
                            </ul>
                        </li>
                        <li>
                            <a href="Absensi.php">
                            <i class="fas fa-table"></i>Absensi</a>
                        </li>
                        <li>
                            <a href="Belajar.php">
                            <i class="fas fa-graduation-cap"></i>Belajar</a>
                        </li>
                        <li>
                            <a href="Berita.php">
                            <i class="far fa-newspaper"></i>Berita</a>
                        </li>
                       
                        <li>
                            <a href="ImageSlider.php">
                            <i class="far fa-images"></i>Image slider</a>
                        </li>
                        <li>
                            <a href="Informasi.php">
                            <i class="fas fa-info"></i>Informasi</a>
                        </li>
                        <li>
                            <a href="Jadwal.php">
                            <i class="fas fa-clipboard-list"></i>Jadwal</a>
                        </li>
                        <li>
                            <a href="Nilai.php">
                            <i class="fas fa-list-ol"></i>Nilai</a>
                        </li>
                        <li>
                            <a href="Pembayaran.php">
                                <i class="far fa-money-bill-alt"></i>Pembayaran</a>
                        </li>
                        <li>
                            <a href="Users.php">
                            <i class="far fa-user"></i>Users</a>
                        </li>
                        <li>
                            <a href="Admin.php">
                            <i class="far fa-user"></i>Admin</a>
                        </li>
                        <li>
                            <a href="guruAbsen.php">
                            <i class="fas fa-clipboard-list"></i>Guru Absen</a>
                        </li>
                       
                        <li>
                            <a href="Kelas.php">
                            <i class="fas fa-users"></i>Kelas</a>
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
                                       
                                        <div class="">
                                            <a href="logout.php">
                                            <button class="btn btn-secondary" type="">
                                            Logout
                                            </button>
                                            </a>
                                            
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
                        <center>
                        <h2>Selamat Datang di Web Admin Gita Smart School</h2>
                        </center>
                         <div class="row m-t-30">
                            <div class="col-md-12">
                            
                                <!-- DATA TABLE-->
                                <h3>Jadwal</h3>
                                <?php 
                                require_once'koneksi.php';
                                ?>
                                <form method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="cari" placeholder="Cari Nama Guru " class="form-control">
                                    <div class="input-group-append">
                                        <input type="submit" name="submit" value="cari" class="btn btn-outline-secondary">
                                    </div>
                                </div>
                                <form>
                                    <table class="table table-borderless table-data3">
                                        <thead>
                                            <tr>
                                                <th>Id </th>
                                             
                                                <th>Semester</th>
                                                <th>Tahun</th>
                                                <th>Hari</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Jam</th>
                                                <th>Guru</th>
                                                
                                            </tr>
                                        </thead>
                                        <?php
                                            if(!ISSET($_POST['submit'])){
                                            include 'koneksi.php';
                                            $data = mysqli_query($koneksi,"SELECT * FROM `jadwal`");
                                            while($d = mysqli_fetch_array($data)){
                                        ?>
                                        <tbody>
                                            <tr>
                                                 <td><?php echo $d['id']; ?></td>
                                               
                                                 <td><?php echo $d['semester']; ?></td>
                                                 <td><?php echo $d['tahun']; ?></td>
                                                 <td><?php echo $d['hari']; ?></td>
                                                 <td><?php echo $d['nama_pelajaran']; ?></td>
                                                 <td><?php echo $d['jam']; ?></td>
                                                 <td><?php echo $d['guru']; ?></td>
                                            </tr>
                                            <?php 
                                            }}
                                            ?>
                                            <?php if (ISSET($_POST['submit'])){
                                                $cari = $_POST['cari'];
                                                $query2 = "SELECT * FROM jadwal WHERE guru LIKE '%$cari%'";
                                                
                                                $sql = mysqli_query($koneksi, $query2);
                                                while ($d = mysqli_fetch_array($sql)){
                                                ?>
                                                <tr>
                                                 <td><?php echo $d['id']; ?></td>
                                              
                                                 <td><?php echo $d['semester']; ?></td>
                                                 <td><?php echo $d['tahun']; ?></td>
                                                 <td><?php echo $d['hari']; ?></td>
                                                 <td><?php echo $d['nama_pelajaran']; ?></td>
                                                 <td><?php echo $d['jam']; ?></td>
                                                 <td><?php echo $d['guru']; ?></td>
                                                </tr>
                                                <?php }} ?>
                                        </tbody>

                                            
                                    </table>
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
