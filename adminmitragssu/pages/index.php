<?php
include "cek_login.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Mitra Gita SmartSchool & University</title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">Startmin</a>
            </div>

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <ul class="nav navbar-nav navbar-left navbar-top-links">
                <li><a href="#"><i class="fa fa-home fa-fw"></i> Website</a></li>
            </ul>

            <ul class="nav navbar-right navbar-top-links">
                <li class="dropdown navbar-inverse">
                   
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> Admin <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        
                        <li>
                            <a href="index.php" class="active"><i class="fa fa-dashboard fa-fw"></i> Mitra</a>
                        </li>

                         <li>
                            <a href="Admin.php" class="active"><i class="fa fa-user fa-fw"></i> Admin</a>
                        </li>
<!-- 
                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>
 -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Mitra</h1>
            </div>

        </div>
        <div class="scrollmenu">

           <div class="table-responsive">
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Id </th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Kode Pos</th>
                        <th>No Handphone</th>
                        <th>Email</th>
                        <th>Nama Bank</th>
                        <th>No Rekening</th>
                        <th>Nama Pemilik Rekening</th>
                        <th>Foto KTP</th>
                        <th>Foto KK</th>
                        <th>Foto NPWP</th>
                        <th>Foto SKCK</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php
                include 'koneksi.php';
                $data = mysqli_query($koneksi,"SELECT * FROM `pendaftaran_mitra`");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tbody>
                        <tr>
                           <td><?php echo $d['id']; ?></td>
                           <td><?php echo $d['nama']; ?></td>
                           <td><?php echo $d['alamat']; ?></td>
                           <td><?php echo $d['kota']; ?></td>
                           <td><?php echo $d['provinsi']; ?></td>
                           <td><?php echo $d['kode_pos']; ?></td>
                           <td><?php echo $d['no_handphone']; ?></td>
                           <td><?php echo $d['email']; ?></td>
                           <td><?php echo $d['nama_bank']; ?></td>
                           <td><?php echo $d['no_rekening']; ?></td>
                           <td><?php echo $d['nama_pemilik_rekening']; ?></td>
                           
                        
                           <td><img style="height: 50px; width: 50px;" src="http://localhost/gss/FotoKTP/<?php echo $d['foto_ktp']?>"  /></td>
                           <td><img style="height: 50px; width: 50px;" src="http://localhost/gss/FotoKK/<?php echo $d['foto_kk']?>"  /></td>
                           <td><img style="height: 50px; width: 50px;" src="http://localhost/gss/FotoNPWP/<?php echo $d['foto_npwp']?>"  /></td>
                           <td><img style="height: 50px; width: 50px;" src="http://localhost/gss/FotoSKCK/<?php echo $d['foto_skck']?>"  /></td>
                           <td>
                               <div class="">
                                <a href="EditDataMitra.php?id=<?php echo $d['id']?>">
                                    <button class="" title="Edit">
                                        Edit
                                    </button>
                                </a>
                                <a href="DeleteMitra.php?id=<?php echo $d['id']?>">
                                    <button class=""  title="Delete">
                                        Delete
                                    </button>
                                </a>
                            </div>
                        </td>    
                    </tr>
                    <?php 
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../js/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../js/raphael.min.js"></script>
<script src="../js/morris.min.js"></script>
<script src="../js/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../js/startmin.js"></script>

</body>
</html>
