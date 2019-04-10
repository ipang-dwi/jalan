<?php
	session_start();
	if (!isset($_SESSION['login']))
		header('Location: index.php');
	include('configdb.php');
?>

<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title><?php echo $_SESSION['judul']." - ".$_SESSION['welcome']." - oleh ".$_SESSION['by'];?></title>
	
    <!-- Bootstrap core CSS -->
    <link href="ui/css/bootstrap.css" rel="stylesheet">
	<link href="ui/css/united.min.css" rel="stylesheet">
	<link rel='stylesheet' href='ui/css/bootstrap-datepicker.min.css'>
	<link rel='stylesheet' href='ui/css/font-awesome.min.css'>

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="./index_files/ie-emulation-modes-warning.js"></script-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
	<div class="container">

      <!-- Static navbar -->
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $_SESSION['judul'];?></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
           <ul class="nav navbar-nav">
              <li><a href="index.php">Home</a></li>
	      <li class="active"><a href="jalan.php">Data Jalan</a></li>
			  <li><a href="peta.php">Peta Persebaran Jalan</a></li>
              <?php if($_SESSION['level']=='admin'){ ?>
	      <li><a href="user.php">Data User</a></li>
	      <?php } ?>
              <li><a href="profile.php">Profile</a></li>
			  <li><a href="about.php">About</a></li>
			  <li><a href="logout.php">Logout</a></li>
			</ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>'
	  <br><br><br>
		<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="jalan.php">Data Jalan</a></li>
		  <li class="active">Tambah Data Jalan</li>
		</ol>
      <!-- Main component for a primary marketing message or call to action -->
      <div class="panel panel-primary">
		  <!-- Default panel contents -->
		  <div class="panel-heading">Tambah Data Jalan</div>
		  <div class="panel-body">
							<form role="form" enctype="multipart/form-data" method="post" action="add-j.php">
                                    <div class="box-body">		
										<div class="form-group">
                                            <label for="user">Latitude</label>
                                            <input type="text" class="form-control" name="lat" id="lat" placeholder="Latitude" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Longitude</label>
                                            <input type="text" class="form-control" name="lng" id="lng" placeholder="Longitude" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Nama Pekerjaan</label>
                                            <input type="text" class="form-control" name="nama_pekerjaan" id="nama_pekerjaan" placeholder="Nama Pekerjaan" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Panjang Jalan</label>
                                            <input type="text" class="form-control" name="panjang_jalan" id="panjang_jalan" placeholder="Panjang Jalan" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Lebar Jalan</label>
                                            <input type="text" class="form-control" name="lebar_jalan" id="lebar_jalan" placeholder="Lebar Jalan" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Kecamatan</label>
                                            <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Desa</label>
                                            <input type="text" class="form-control" name="desa" id="desa" placeholder="Desa" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Sumber Dana</label>
                                            <input type="text" class="form-control" name="sumber_dana" id="sumber_dana" placeholder="Sumber Dana" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Nama Pelaksana</label>
                                            <input type="text" class="form-control" name="nama_pelaksana" id="nama_pelaksana" placeholder="Nama Pelaksana" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Nilai PAGU</label>
                                            <input type="text" class="form-control" name="nilai_pagu" id="nilai_pagu" placeholder="Nilai PAGU" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Nilai Kontrak</label>
                                            <input type="text" class="form-control" name="nilai_kontrak" id="nilai_kontrak" placeholder="Nilai Kontrak" required >
                                        </div>
										<div class="form-group">
                                            <label for="user">Kondisi Jalan</label>
                                            <input type="text" class="form-control" name="kondisi_jalan" id="kondisi_jalan" placeholder="Kondisi Jalan" required >
                                        </div>
										<div class="form-group">
                                            <label for="foto">Foto</label>
                                            <!-- MAX_FILE_SIZE must precede the file input field -->
											<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
											<input type="file" name="foto" id="foto" placeholder="Foto" required />
                                        </div>
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
										<button type="reset" class="btn btn-info">Reset</button>
										<a href="gejala.php" type="cancel" class="btn btn-warning">Batal</a>
                                        <button type="submit" class="btn btn-primary">Tambahkan</button>
                                    </div>
                            </form>
		  </div>
		  <div class="panel-footer"><b class="text-primary">By <?php echo $_SESSION['by'];?></b><b class="pull-right text-primary">&copy <?php echo date('Y');?></b></div>
		</div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="ui/js/jquery-1.10.2.min.js"></script>
	<script src="ui/js/bootstrap.min.js"></script>
	<script src="ui/js/bootswatch.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="ui/js/ie10-viewport-bug-workaround.js"></script>
	<script src='ui/js/bootstrap-datepicker.min.js'></script>
    <script src="ui/js/index.js"></script>

</body></html>
