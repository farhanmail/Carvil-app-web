<section id="our-feature" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="<?php echo base_url('assets/assets_shop/')?>/assets/images/left-arrow.png" alt="" />

                        <h4 class="">Form Booking Villa</h4>
                    </div>
                </div>
			<?php foreach($detail as $dt) : ?>
				<form method="POST" action="<?php echo base_url('customer/booking/tambah_booking_aksi') ?>">
					
					<div class="features-content">
						<label>Harga Sewa/Hari</label>
						<input type="hidden" name="id_villa" value="<?php echo $dt->id_villa ?>">
						<input type="text" name="harga" class="form-control" value="<?php echo $dt->harga ?>"readonly><br>
					
					<div class="">
						<label>Tanggal Sewa</label>
						<input type="date" name="tanggal_sewa" class="form-control"><br>
					</div>

					<div class="">
						<label>Tanggal Selesai Sewa</label>
						<input type="date" name="tanggal_selesai" class="form-control"><br>
						<button type="submit" class="btn btn-success mb-6">Booking</button>
					</div>
					</div>

				</form>
			<?php endforeach; ?>
		</div>
	</div>
</div>
</section>