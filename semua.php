<?php 
	include 'json.php';
	include 'configdb.php';
							
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
		<!-- Custom styles for this template -->
		<link href="https://getbootstrap.com/docs/4.0/examples/jumbotron/jumbotron.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-example.min.css" />
		<!-- Add fancyBox main JS and CSS files -->
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
		<link rel="shortcut icon" href="admin/favicon.ico">
  </head>

  <body>
			<div id="bh-sl-map-container" class="bh-sl-map-container">
				<div class="container-fluid">
					<div id="map-results-container" class="row">
						<div id="bh-sl-map" class="bh-sl-map col-md-9"></div>
						<div class="bh-sl-loc-list col-md-3">
							<ul class="list list-unstyled"></ul>
						</div>
					</div>
				</div>
		  </div>
		

	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/libs/handlebars.min.js"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyDMeO2oiY_VGtnR9yZOdvH8bLWyD3FXycc&language=id&region=ID"></script>
	<script src="assets/js/plugins/storeLocator/jquery.storelocator.js"></script>
	<script>
			$(function() {
				$('#bh-sl-map-container').storeLocator({
					distanceAlert : 60,
					dataType: 'json',
					dataLocation: 'data/jalan.json',
					slideMap : false,
					// ==== hapus comment 3 baris code di bawah ini, untuk mendisable autogeocode ===
					//defaultLoc: true,
					//defaultLat: '-7.795580',
					//defaultLng : '110.369490',
					// ==============================================================================
					autoGeocode: true,	// untuk mendeteksi lokasi user secara realtime
					storeLimit : -1,
					lengthUnit : 'km',
					mapSettings : {
						//mapTypeId: google.maps.MapTypeId.ROADMAP,
						zoom     : 13
					},
					// Language options
					addressErrorAlert     : 'Alamat tidak dapat ditemukan',
					autoGeocodeErrorAlert : 'Pendeteksian lokasi Anda secara otomatis tidak berhasil. Silahkan masukkan alamat.',
					distanceErrorAlert    : 'Sayang sekali, lokasi terdekat yang Anda cari lebih dari ',
					kilometerLang         : 'kilometer',
					kilometersLang        : 'kilometer',
					mileLang              : 'mil',
					milesLang             : 'mil',
					noResultsTitle        : 'Tidak ada hasil',
					noResultsDesc         : 'Tidak ada lokasi yang dtemukan dengan Alamat yang Anda berikan.',
					nextPage              : 'Lanjut &raquo;',
					prevPage              : '&laquo; Kembali',
				});
			});
		</script>

  </body>
</html>
