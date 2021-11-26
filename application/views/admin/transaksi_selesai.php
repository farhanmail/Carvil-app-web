 <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Transaksi Selesai</h1>
          </div>
       	</section>

       	<?php foreach ($transaksi as $tr): ?>
       	<form method="POST" action="<?php echo base_url('admin/transaksi/transaksi_selesai_aksi') ?>">
       		<input type="hidden" name="id_sewa" value="<?php echo $tr->id_sewa ?>">

       		<div class="form-group">
       			<label>Tanggal Penselesaian</label>
       			<input type="date" name="tanggal_penselesaian" class="form-control" value="<?php echo $tr->tanggal_penselesaian?>">
       		</div>

       		<div class="form-group">
       			<label>Status Penselesaian</label>
       			<select name="status_penselesaian" class="form-control">
       				<option value="<?php echo $tr->status_penselesaian?>"><?php echo $tr->status_penselesaian ?></option>
       				<option value="Berakhir">Berakhir</option>
       				<option value="Belum Berakhir">Belum Berakhir</option>
       			</select>
       		</div>

       		<div class="form-group">
       			<label>Status Sewa</label>
       			<select name="status_sewa" class="form-control">
       				<option value="<?php echo $tr->status_sewa?>"><?php echo $tr->status_sewa ?></option>
       				<option value="Selesai">Selesai</option>
       				<option value="Belum Selesai">Belum Selesai</option>
       			</select>
       		</div>

       		<button type="submit" class="btn btn-success">Simpan</button>

       	</form>
       	<?php endforeach ?>

    </div>