<?php include 'header.php'; ?>
<!-- BEGIN: Subheader -->
<div class="m-content">
	<div class="m-portlet m-portlet--mobile">		
		<div class="m-portlet__head">
			<div class="m-portlet__head-caption">
				<div class="m-portlet__head-title">
					<h3 class="m-portlet__head-text">
						Input Data Fasilitas Baru
					</h3>
				</div>
			</div>
		</div>	
		<div class="m-portlet__body">
			<form action="<?php echo $GLOBALS['base_url'] ?>fasilitas/store" method="post" enctype="multipart/form-data">
  				<div class="form-group">
    				<label for="name">Nama Fasilitas:</label>
    					<input type="text" class="form-control" name="fasilitas">
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
  				
  				<button type="submit" class=" btn btn-success align-right">Submit</button>
			</form>
			
		</div>
	</div>
</div> 

<?php include 'footer.php'; ?>