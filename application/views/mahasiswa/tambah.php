<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
			  <div class="card-header">
			    Form Tambah Data Mahasiswa
			  </div>
			  <div class="card-body">
			  	<?php if (validation_errors()) : ?>
			  	<div class="alert alert-danger" role="alert">
				  <?= validation_errors(); ?>
				</div>
				<?php endif; ?>
				<form action="" method="post">
					<div class="form-group">
				    	<label for="nama">Nama</label>
				    	<input type="text" class="form-control" id="nama" name="nama">
				  	</div>
					<div class="form-group">
				    	<label for="nrp">NRP</label>
				    	<input type="text" class="form-control" id="nrp" name="nrp">
				  	</div>
					<div class="form-group">
				    	<label for="email">Email</label>
				    	<input type="text" class="form-control" id="email" name="email">
				  	</div>
				  	<div class="form-group">
					    <label for="jurusan">Jurusan</label>
					    <select class="form-control" id="jurusan" name="jurusan">
					      <option value="Teknik Informatika">Teknik Informatika</option>
					      <option value="Teknik Industri">Teknik Industri</option>
					      <option value="Teknik Pangan">Teknik Pangan</option>
					      <option value="Teknik Mesin">Teknik Mesin</option>
					      <option value="Teknik Planologi">Teknik Planologi</option>
					      <option value="Teknik Lingkungan">Teknik Lingkungan</option>
					    </select>
					</div>
					<button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
				</form>
			  </div>
			</div>

		</div>
	</div>
</div>