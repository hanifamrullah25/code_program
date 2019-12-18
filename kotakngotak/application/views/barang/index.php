<div class="container">

	<?php if( $this->session->flashdata('data') ) : ?>

	<div class="row mt-3">
		<div class="col mt-6">
			<div class="alert alert-success alert-dismissible fade show" role="alert">
			  Data barang <strong>berhasil </strong><?= $this->session->flashdata('data'); ?>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			    <span aria-hidden="true">&times;</span>
			  </button>
			</div>
		</div>
	</div>

	<?php endif; ?>

	<div class="row mt-3">
		<div class="col-md-6">
			<form action="" method="post">

				<div class="input-group">
				  <input type="text" class="form-control" placeholder="Cari barang . . ." name="cari">
				  <div class="input-group-append">
				    <button class="btn btn-primary" type="submit" >cari</button>
				  </div>
				</div>

			</form>
		</div>
	</div>

	<div class="row mt-3">
		<div class="col-md-6">
			<a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah Barang</a>
		</div>
	</div>
	
	<div class="row mt-3">
		<div class="col-md-6">

			<h3>Daftar Barang</h3>

			<?php if( empty($barang) ) : ?>
				<div class="alert alert-info" role="alert">
				  Barang tidak ditemukan
				</div>
			<?php endif; ?>

			<ul class="list-group">

				<?php foreach( $barang as $brg ) : ?>
				<li class="list-group-item">

					<?= $brg['nama_barang']; ?>						
					
					<a href="<?= base_url(); ?>Barang/hapus/<?= $brg['id_barang']; ?>" class="badge badge-danger float-right" onclick="return confirm('hapus barang?');">hapus</a>


					<a href="<?= base_url(); ?>Barang/detail/<?= $brg['id_barang']; ?>" class="badge badge-primary float-right">detail</a>

					<a href="<?= base_url(); ?>Barang/edit/<?= $brg['id_barang']; ?>" class="badge badge-success float-right">edit</a>
				</li>
				<?php endforeach; ?>

			</ul>
		</div>

	</div>

</div>