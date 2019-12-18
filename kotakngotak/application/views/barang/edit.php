<div class="container">
	
	<div class="row mt-3">

		<div class="col-md-6">


			<div class="card">
			  <div class="card-header">
			    Form Edit Barang
			  </div>

				  <div class="card-body">

					<form action="" method="post">

						<input type="hidden" name="di" value="<?= $barang['id_barang']?>">

						<div class="form-group">
							<label for="barang">Nama Barang</label>
							<input type="text" name="barang" class="form-control" id="barang" value="<?= $barang['nama_barang'] ?>">
							<small id="emailHelp" class="form-text text-danger"><?= form_error('barang') ?></small>
						</div>	

						  <div class="form-group">
						    <label for="jumlah">Banyak Barang</label>
						    <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $barang['jumlah'] ?>">
							<small class="form-text text-danger"><?= form_error('jumlah') ?></small>
						  </div>

						<div class="form-group">
							<label for="deskripsi">Deskripsi Barang</label>
							<input type="text" name="deskripsi" class="form-control" id="deskripsi" value="<?= $barang['deskripsi'] ?>">
							<small id="emailHelp" class="form-text text-danger"><?= form_error('deskripsi') ?></small>
						</div>	

						<button type="submit" name="edit" class="btn btn-primary float-right">Simpan Barang</button>

					</form>

					

				  </div>
				  
			</div>

		

		</div>

	</div>

</div>