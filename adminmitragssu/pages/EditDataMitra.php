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
                <a class="navbar-brand" href="index.html">Startmin</a>
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
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
                    </a>
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
                        <i class="fa fa-user fa-fw"></i> secondtruth <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
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
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.html" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>

                        <li>
                            <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                        </li>

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
        <?php
        include 'koneksi.php';
        $id = $_GET['id'];
        $data = mysqli_query($koneksi,"select * from pendaftaran_mitra where id='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>

        <div class="container" style="width: 800px;">
          <form enctype="multipart/form-data" action="ProsesEditRegisterMitra.php" method="post"> 
             <div class="form-group">
              <label for="">Id</label>
              <input type="text" name="id" class="form-control" value="<?php echo $d['id']?>" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
              <label for="">Nama Lengkap</label>
              <input type="text" name="nama" class="form-control" value="<?php echo $d['nama']?>" placeholder="Nama Lengkap">
          </div>
          <div class="form-group">
              <label for="">Alamat</label>
              <input type="text" name="alamat" class="form-control" value="<?php echo $d['alamat']?>" id="" placeholder="Alamat">
          </div>
          <div class="form-group">
              <label for="">Kota</label>
              <input type="text" name="kota" class="form-control" id="" value="<?php echo $d['kota']?>" placeholder="kota">
          </div>
          <div class="form-group">
              <label for="">Provinsi</label>
              <input type="text" name="provinsi"class="form-control" id="" value="<?php echo $d['provinsi']?>" placeholder="Provinsi">
          </div>
          <div class="form-group">
              <label for="">Kode Pos</label>
              <input type="text" name="kode_pos" class="form-control" id="" value="<?php echo $d['kode_pos']?>" placeholder="Kode Pos">
          </div>
          <div class="form-group">
              <label for="">No Handphone</label>
              <input type="text" name="no_handphone" class="form-control" id="" value="<?php echo $d['no_handphone']?>" placeholder="No Handphone">
          </div>
          <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" class="form-control" id="" value="<?php echo $d['email']?>" placeholder="name@example.com">
          </div>
          <div class="form-group">
              <label for="">Nama Bank</label>
              <input type="text" name="nama_bank" class="form-control" id="" value="<?php echo $d['nama_bank']?>" placeholder="Nama Bank">
          </div>
          <div class="form-group">
              <label for="">No Rekening</label>
              <input type="text" name="no_rekening" class="form-control" id="" value="<?php echo $d['no_rekening']?>" placeholder="No Rekening">
          </div>
          <div class="form-group">
              <label for="">Nama Pemilik Rekening</label>
              <input type="text" name="nama_pemilik_rekening" class="form-control" value="<?php echo $d['nama_pemilik_rekening']?>" id="" placeholder="Nama Pemilik Rekening">
          </div>
          <div class="form-group">
              <label for="">Foto E-KTP</label>
              <input type="file" name="KTP" value="<?php echo $d['foto_ktp']?>" class="form-control" id="" >
              <span><?php echo $d['foto_ktp'];?></span>
          </div>
          <div class="form-group">
              <label for="">Foto KK</label>
              <input type="file" name="KK" value="<?php echo $d['foto_kk']?>" class="form-control" id="">
              <span><?php echo $d['foto_kk'];?></span>
          </div>
          <div class="form-group">
              <label for="">Foto NPWP</label>
              <input type="file" name="NPWP" value="<?php echo $d['foto_npwp']?>" class="form-control" id="">
              <span><?php echo $d['foto_npwp'];?></span>
          </div> 
          <div class="form-group">
              <label for="">Foto SKCK</label>
              <input type="file" name="SKCK" value="<?php echo $d['foto_skck']?>" id="SKCK" class="form-control" /> 
              <span><?php echo $d['foto_skck'];?></span>
          </div>

          <center>

            <button type="submit" name="upload" value="Upload" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>

        </center>
    </form>
    <?php 
}
?>
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
