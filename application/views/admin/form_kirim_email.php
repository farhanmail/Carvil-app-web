<div class="main-content">
    <section class="section">
          <div class="section-header">
            <h1>Form Balas Pesan</h1>
          </div>
    </section>

	<?php foreach($hubungi as $hub): ?>

		<form method="POST" action="<?php echo base_url('admin/hubungi_kami/kirim_email_aksi') ?>">
			<div class="form-group">
				<label>Email</label>
				<input type="hidden" name="id_hubungi" value="<?php echo $hub->id_hubungi ?>">
				<input type="text" name="email" class="form-control" value="<?php echo $hub->email ?>" readonly>
			</div>

			<div class="form-group">
				<label>Subject</label>
				<input type="text" name="subject" class="form-control">
			</div>

			<div class="form-group">
				<label>Pesan</label>
				<textarea type="text" name="pesan" class="form-control" rows="5"></textarea>
			</div>

			<button type="submit" class="btn btn-success">Kirim</button>

		</form>

	<?php endforeach; ?>
</div>