<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Input Data Villa</h1>
          </div>

          <div class="card bg-warning ">
          	<div class="card-body">

          		<form method="POST" action="<?php echo base_url('admin/data_villa/tambah_villa_aksi') ?>" enctype="multipart/form-data">
          		<div class="row">
          			<div class="col-md-6">
          				<div class="form-gorup">
          					<label>Type Villa</label>
          					<select name="kode_type" class="form-control">
          						<option value="">--Pilih Type Villa--</option>
          						<?php foreach ($type as $tp) : ?>
          							<option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
          						<?php endforeach; ?> 
          					</select>
          				</div>

          				<div class="form-gorup">
          					<label>Nama Villa</label>
          					<input type="text" name="merk" class="form-control">			
          				</div>

          				<div class="form-gorup">
          					<label>No Villa</label>
          					<input type="text" name="no_villa" class="form-control">
          					
          				</div>
          				<div class="form-gorup">
          					<label>Warna</label>
          					<input type="text" name="warna" class="form-control">
          				</div>

                              <div class="form-gorup">
                                   <label>Fasilitas</label>
                                   <input type="text" name="fasilitas" class="form-control">
                              </div>
          			</div>
          			<div class="col-md-6">
                              <div class="form-gorup">
                                   <label>Harga Sewa/Hari</label>
                                   <input type="number" name="harga" class="form-control">
                              </div>

          				<div class="form-gorup">
          					<label>Lokasi Villa</label>
          					<input type="text" name="lokasi" class="form-control">
          					<?php echo form_error('lokasi','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-gorup">
          					<label>Status</label>
          					<select name="status" class="form-control">
          						<option value=""> --Pilih Status-- </option>
          						<option value="1">Tersedia</option>
          						<option value="0">Kosong</option>
          					</select>
          					<?php echo form_error('status','<div class="text-small text-danger">','</div') ?>
          				</div>

          				<div class="form-gorup">
          					<label>Gambar Villa</label>
          					<input type="file" name="gambar" class="form-control">
          				</div>

          				<button type="submit" class="btn btn-success mt-4">Simpan</button>
          				<button type="reset" class="btn btn-danger mt-4">Reset</button>
          			</div>
         </div>
          		</form>
          	</div>
          </div>
		</section>
	</div>
