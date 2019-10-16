<div class="container">

	<?php if( $this->session->flashdata('flash') ) : ?>
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data mahasiswa
			  <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>
	<?php endif; ?>
	
	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>mahasiswa/tambah" class="btn btn-primary">Tambah Data Mahasiswa</a>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<h3>Daftar Mahasiswa</h3>

			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Nama</th>
			      <th scope="col">NRP</th>
			      <th scope="col">Email</th>
			      <th scope="col">Jurusan</th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i = 1; ?>
				<?php foreach ($mahasiswa as $mhs) : ?>
			    <tr>
			      <th scope="row"><?= $i++ ?></th>
			      <td><?= $mhs['nama']; ?></td>
			      <td><?= $mhs['nrp']; ?></td>
			      <td><?= $mhs['email']; ?></td>
			      <td><?= $mhs['jurusan']; ?></td>
			      <td><a href="" class="badge badge-primary float-right">detail</a></td>
			      <td><a href="" class="badge badge-success float-right">edit</a></td>
			      <td><a href="<?= base_url(); ?>mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin ?');">hapus</a></td>
			    </tr>
			    <?php endforeach; ?>
			  </tbody>
			</table>
		</div>
	</div>

</div>