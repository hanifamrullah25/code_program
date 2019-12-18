<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			
			<div class="card">
			  <div class="card-header">
			    Detail Barang
			  </div>
			  <div class="card-body">
			    <h5 class="card-title"><?= $barang['nama_barang'] ?></h5>
			    <h6 class="card-subtitle mb-2 text-muted"><?= $barang['jumlah'] ?></h6>
			    <p class="card-text"><?= $barang['deskripsi'] ?></p>
			    <a href="<?= base_url(); ?>barang" class="btn btn-primary">Kembali</a>
			  </div>
			</div>

		</div>
	</div>
</div>