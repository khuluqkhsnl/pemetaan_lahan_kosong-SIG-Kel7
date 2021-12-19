<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin=""/>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>
<link rel="stylesheet" type="text/css" href="<?php echo $GLOBALS['base_url'] ?>assets/vendor/leaflet/leaflet.css">
<script src="<?php echo $GLOBALS['base_url'] ?>assets/vendor/leaflet/leaflet.js" type="text/javascript"></script>
<script src="<?php echo $GLOBALS['base_url'] ?>assets/vendor/leaflet/leaflet.ajax.js" type="text/javascript"></script>

<style type="text/css">
	#peta{
		height:80vh;
	}
</style>

<?php include 'header.php'; ?>      
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">
		<div id="peta"></div>
	</div>
</div> 

<?php include 'footer.php'; ?>

<script type="text/javascript">
	var peta = L.map('peta').setView([-7.345987,112.6128731],13);

	L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
			maxZoom: 18,
			attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
			id: 'mapbox/streets-v11',
			tileSize: 512,
		zoomOffset: -1
			
		}).addTo(peta);

	var data 		   = <?php echo json_encode($data['lahan']) ?>;
	var data_kelurahan = <?php echo json_encode($data['tempat']) ?>;
	var data_fasilitas = <?php echo json_encode($data['fasilitas']) ?>;
	L.marker([-6.906446020324170, 10.759932518005300]).addTo(peta)

	for (var i = data.length - 1; i >= 0; i--) {
		var marker = L.marker([data[i]['latitude'], data[i]['longitude']]).addTo(peta);
		var string = data[i]['nama_lokasi']+'<hr>- Luas Tanah : '+data[i]['luas_tanah']+' m<sup>2</sup><br>- Lahan Terpakai : '+data[i]['lahan_terpakai']+' m<sup>2</sup><br>- Lahan Tersisa : '+data[i]['lahan_tersisa']+' m<sup>2</sup>';
		marker.bindPopup(string);
		// console.log(data[i]['latitude']);
	}

	// var coor = [];
	// for (var i = data_kelurahan.length - 1; i >= 0; i--) {
	// 	var ans = [];
	// 	for (var j = data.length - 1; j >= 0; j--) {
	// 		if(data[j]['id_kelurahan'] == data_kelurahan[i]['id']){
	// 			ans.push([ parseFloat(data[j]['latitude']), parseFloat(data[j]['longitude']) ]);
	// 		}
	// 	}
	// 	// console.log(ans);
	// 	var random_color = '#'+Math.floor(Math.random()*16777215).toString(16);
	// 	var poly         = L.polygon([ans],{color: random_color,weight:4}).addTo(peta);

		
	// 	// console.log(string);
	// 	poly.bindPopup(string);
	// }
	// var desa = new L.GeoJSON.AJAX(["<?php echo $GLOBALS['base_url'] ?>assets/geo/husein sastranegara.geojson"]).addTo(peta);
	// console.log(data_kelurahan.length);
	// var random_color = '#'+Math.floor(Math.random()*16777215).toString(16);
	for (var i = data_kelurahan.length - 1; i >= 0; i--) {
		var desa = new L.GeoJSON.AJAX(["<?php echo $GLOBALS['base_url'] ?>assets/geo/"+data_kelurahan[i]['file']]).addTo(peta);
		var string = "<b>"+data_kelurahan[i]['nama']+"</b><hr>Fasilitas Kelurahan : <br>";
		for (var k = data_fasilitas.length - 1; k >= 0; k--) {
			if (data_fasilitas[k]['id_kelurahan'] == data_kelurahan[i]['id']) {
				string = string + '- ' + data_fasilitas[k]['fasilitas'] + '<br>';
			}
		}
		desa.bindPopup(string);
	}
</script>