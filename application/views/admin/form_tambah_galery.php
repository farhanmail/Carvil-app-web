<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Galery</h1>
          </div>

          <div class="card bg-warning ">
          	<div class="card-body">

          		<form method="POST" action="<?php echo base_url('admin/data_galery/tambah_galery_aksi') ?>" enctype="multipart/form-data">
          		<div class="row">
          			<div class="col-md-6">
          				<div class="form-group">
          					<label>Nama Villa</label>
          					<input type="text" name="nama_villa" class="form-control">
          					<?php echo form_error('nama_villa','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-group">
          					<label>Gambar 1</label>
          					<input type="file" name="gambar_1" class="form-control">
          					<?php echo form_error('gamba_1','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-group">
          					<label>Gambar 2</label>
          					<input type="file" name="gambar_2" class="form-control">
          					<?php echo form_error('gamba_2','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-group">
          					<label>Gambar 3</label>
          					<input type="file" name="gambar_3" class="form-control">
          					<?php echo form_error('gamba_3','<div class="text-small text-danger">','</div>') ?>
          				</div>
          			</div>
          			<div class="col-md-6">
          				<div class="form-group">
          					<label>Gambar 4</label>
          					<input type="file" name="gambar_4" class="form-control">
          					<?php echo form_error('gamba_4','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-group">
          					<label>Gambar 5</label>
          					<input type="file" name="gambar_5" class="form-control">
          					<?php echo form_error('gamba_5','<div class="text-small text-danger">','</div>') ?>
          				</div>

          				<div class="form-group">
          					<label>Gambar 6</label>
          					<input type="file" name="gambar_6" class="form-control">
          					<?php echo form_error('gamba_6','<div class="text-small text-danger">','</div>') ?>
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