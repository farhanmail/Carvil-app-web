<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Update Data Villa</h1>
          </div>

          <div class="card bg-secondary">
          	<div class="card-body">

                    <?php foreach ($villa as $mb) : ?>

          		<form method="POST" action="<?php echo base_url('admin/data_villa/update_villa_aksi') ?>" enctype="multipart/form-data">
          		<div class="row">
          			<div class="col-md-6">
          				<div class="form-gorup">
          					<label>Type Villa</label>
                                   <input type="hidden" name="id_villa" value="<?php echo $mb->id_villa ?>">
          					<select name="kode_type" class="form-control">
          						<option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>
          						<?php foreach ($type as $tp) : ?>
          							<option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type ?></option>
          						<?php endforeach; ?> 
          					</select>
          				</div>

          				<div class="form-gorup">
          					<label>Nama Villa</label>
          					<input type="text" name="merk" class="form-control" value="<?php echo $mb->merk ?>">			
          				</div>

          				<div class="form-gorup">
          					<label>No Villa</label>
          					<input type="text" name="no_villa" class="form-control" value="<?php echo $mb->no_villa ?>">
          					
          				</div>
          				<div class="form-gorup">
          					<label>Warna</label>
          					<input type="text" name="warna" class="form-control" value="<?php echo $mb->warna ?>">
          					
          				</div>

                              <div class="form-gorup">
                                   <label>Fasilitas</label>
                                   <input type="text" name="fasilitas" class="form-control" value="<?php echo $mb->fasilitas ?>">
                                   
                              </div>
          			</div>
          			<div class="col-md-6">

                              <div class="form-gorup">
                                   <label>Harga /hari</label>
                                   <input type="number" name="harga" class="form-control" value="<?php echo $mb->harga ?>">
                                   
                              </div>

          				<div class="form-gorup">
          					<label>Lokasi Villa</label>
          					<input type="text" name="lokasi" class="form-control" value="<?php echo $mb->lokasi ?>">
          					<?php echo form_error('lokasi','<div class="text-small text-danger">','</div') ?>
          				</div>

          				<div class="form-gorup">
          					<label>Status</label>
          					<select name="status" class="form-control">
          						<option <?php if ($mb->status == "1"){echo "selected  = 'selected'";}
                                        echo $mb->status; ?> value="1">Tersedia</option>
                                       
                                        <option <?php if ($mb->status == "0"){echo "selected  = 'selected'";}
                                        echo $mb->status; ?> value="0">Kosong</option>
          					</select>
          					<?php echo form_error('status','<div class="text-small text-danger">','</div') ?>
          				</div>

          				<div class="form-gorup">
          					<label>Gambar Villa</label>
          					<input type="file" name="gambar" class="form-control">
          				</div>

          				<button type="submit" class="btn btn-success mt-4">Simpan</button>
          				<button type="reset" class="btn btn-danger mt-4">reset</button>
          			</div>
         </div>
          		</form>
               <?php endforeach; ?>
          	</div>
          </div>
		</section>
	</div>
