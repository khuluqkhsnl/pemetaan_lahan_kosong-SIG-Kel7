<?php include 'header.php'; ?>
<!-- BEGIN: Subheader -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">		
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Input Data Lahan Baru
					</h3>
				</div>
			</div>
		</div>	
		<div class="m-portlet__body">
			<form action="<?php echo $GLOBALS['base_url'] ?>lahan/store" method="post" enctype="multipart/form-data">
  				<div class="form-group">
    				<label for="name">Nama Lokasi:</label>
    					<input type="text" class="form-control" name="nama_lokasi">
  				</div>
  				
  				<div class="form-group">
  					<label for="kecamatan">Kecamatan</label>
  						<select class="form-control" name="id_kecamatan">
  						<option value="">-- Pilih Kecamatan --</option>
    					<option value="9">Driyorejo</option> 
  						</select>
  				</div>
				<div class="form-group">
  					<label for="kelurahan">Kelurahan</label>
  						<select class="form-control" name="id_kelurahan">
  						<option value="">-- Pilih Kelurahan --</option>
  						  <?php foreach ($data['tempat'] as $i => $data){ ?>
    					<option value="<?php echo $data->id; ?>"><?php echo $data->nama; ?></option>
    					<?php } ?> 
  						</select>
  				</div>
  				<div class="form-group">
    				<label for="latitude">Latitude:</label>
    					<input type="text" class="form-control" name="latitude">
  				</div>
  				<div class="form-group">
    				<label for="longitude">Longitude:</label>
    					<input type="text" class="form-control" name="longitude">
  				</div>
  				<button type="submit" class=" btn btn-success align-right">Submit</button>
  				<a href="<?php echo $GLOBALS['base_url'] ?>lahan"><button class="btn btn-danger">Kembali</button></a>
			</form>
			
		</div>
	</div>
</div> 

<?php include 'footer.php'; ?>