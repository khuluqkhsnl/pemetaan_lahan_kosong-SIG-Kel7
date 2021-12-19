<?php include 'header.php'; ?>
<!-- BEGIN: Subheader -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">		
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Input Data Klasifikasi Lahan Baru
					</h3>
				</div>
			</div>
		</div>	
		<div class="m-portlet__body">
			<form action="<?php echo $GLOBALS['base_url'] ?>Klasifikasi/store" method="post" enctype="multipart/form-data">
  				<div class="form-group">
  					<label for="id_lokasi">Lokasi</label>
  						<select class="form-control" name="id_lokasi">
  						<option value="">-- Pilih Lokasi --</option>
  						  <?php foreach ($data['lahan'] as $i => $data){ ?>
    					<option value="<?php echo $data->id; ?>"><?php echo $data->nama_lokasi; ?></option>
    					<?php } ?> 
  						</select>
  				</div>
  				<div class="form-group">
    				<label for="luas_tanah">Luas Tanah (M<sup>2</sup>):</label>
    					<input type="text" class="form-control" name="luas_tanah">
  				</div>
  				<div class="form-group">
    				<label for="lahan_terpakai">Lahan Terpakai (M<sup>2</sup>):</label>
    					<input type="text" class="form-control" name="lahan_terpakai">
  				</div>
  				<div class="form-group">
    				<label for="lahan_tersisa">Lahan Tersisa (M<sup>2</sup>):</label>
    					<input type="text" class="form-control" name="lahan_tersisa">
  				</div>
  				
  				<button type="submit" class=" btn btn-success align-right">Submit</button>
			</form>
			
		</div>
	</div>
</div> 

<?php include 'footer.php'; ?>