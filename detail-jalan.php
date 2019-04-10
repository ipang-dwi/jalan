<?php
	session_start();
	if (!isset($_SESSION['login']))
		header('Location: index.php');
	include('configdb.php');
?>

<!DOCTYPE html>
<html lang="en">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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

    <!-- Custom styles for this template -->
    <link href="ui/css/jumbotron.css" rel="stylesheet">
	
	<style>
      /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>

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
      </nav>
	  <br><br><br>
		<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li><a href="jalan.php">Data Jalan</a></li>
		  <li class="active">Detail Data Jalan</li>
		</ol>
      <!-- Main component for a primary marketing message or call to action -->
     
	  <div class="row">
		  <div class="col-md-6">
			<div class="panel panel-primary">
			<div class="panel-heading">Lokasi Data Jalan</div>
			 <div class="panel-body">
				 <div id="map"></div>
			  </div>	
			</div>
		  </div>
		  <div class="col-md-6">
			 <div class="panel panel-primary">
			<div class="panel-heading">Detail Data Jalan</div>
			<?php
									$result = $mysqli->query("select * from jalan where id_jalan = ".$_GET['id']."");
									if(!$result){
										echo $mysqli->connect_errno." - ".$mysqli->connect_error;
										exit();
									}
									while($row = $result->fetch_assoc()){
						?>
		  <div class="panel-body">
							        <div class="box-body">
										<div class="form-group">
                                            Latitude : <?php echo $row['lat'];?>
                                        </div>
										<div class="form-group">
                                            Longitude : <?php echo $row['lng'];?>
                                        </div>
										<div class="form-group">
                                            Nama Pekerjaan : <?php echo $row['nama_pekerjaan'];?>
                                        </div>
										<div class="form-group">
                                            Panjang Jalan : <?php echo $row['panjang_jalan'];?>
                                        </div>
										<div class="form-group">
                                            Lebar Jalan : <?php echo $row['lebar_jalan'];?>
                                        </div>
										<div class="form-group">
                                            Kecamatan : <?php echo $row['kecamatan'];?>
                                        </div>
										<div class="form-group">
                                            Desa : <?php echo $row['desa'];?>
                                        </div>
										<div class="form-group">
                                            Sumber Dana : <?php echo $row['sumber_dana'];?>
                                        </div>
										<div class="form-group">
                                            Nama Pelaksana : <?php echo $row['nama_pelaksana'];?>
                                        </div>
										<div class="form-group">
                                            Nilai PAGU : <?php echo $row['nilai_pagu'];?>
                                        </div>
										<div class="form-group">
                                            Nilai Kontrak : <?php echo $row['nilai_kontrak'];?>
                                        </div>
										<div class="form-group">
                                            Kondisi Jalan : <?php echo $row['kondisi_jalan'];?>
                                        </div>
										<div class="form-group">
                                            Foto :<br>
											<img src="uploads/<?php echo $row['foto'];?>" />
                                        </div>			
                                    </div><!-- /.box-body -->
		  </div>
		  </div>
		  </div>
		</div>
		  <!-- Default panel contents -->
		  
		  				
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
	<script>
		// Initialize and add the map
		function initMap() {
		  // The location of Uluru
		  var uluru = {lat: <?php echo $row['lat'];?>, lng: <?php echo $row['lng'];?>};
		  // The map, centered at Uluru
		  var map = new google.maps.Map(
			  document.getElementById('map'), {zoom: 17, center: uluru});
		  // The marker, positioned at Uluru
		  var marker = new google.maps.Marker({position: uluru, map: map});
		}
    </script>
	<?php } ?>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMeO2oiY_VGtnR9yZOdvH8bLWyD3FXycc&language=id&region=ID&callback=initMap"></script>
</body></html>
