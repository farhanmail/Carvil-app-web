<section id="our-feature" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="<?php echo base_url('assets/assets_shop/')?>/assets/images/left-arrow.png" alt="" />

                        <h4 class="">Transaksi Anda</h4>
                    </div>
                </div>

		<div class="card-body">
			<div class="features-content active">
			<table class="table table-bordered table-striped">
				<tr>
					<th>No</th>
					<th>Nama Customer</th>
					<th>Nama Villa</th>
					<th>No Villa</th>
					<th>Harga Sewa</th>
					<th>Action</th>
					<th>Batal</th>
				</tr>

				<?php $no=1; foreach($transaksi as $tr) : ?>
				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tr->nama ?></td>
					<td><?php echo $tr->merk ?></td>
					<td><?php echo $tr->no_villa ?></td>
					<td>Rp. <?php echo number_format($tr->harga,0,',','.') ?></td>
					<td>
						<?php if($tr->status_sewa == "Selesai") { ?>
							<button class="btn btn-sm btn-danger">Sewa Selesai</button>
						<?php }else{ ?>
							<a href="<?php echo base_url('customer/transaksi/pembayaran/'.$tr->id_sewa) ?>" class="btn btn-sm btn-success">Cek Pembayaran</a>
						<?php } ?>
					</td>
					<td>
					<?php 
						if($tr->status_sewa =='Belum Selesai') { ?>
							<a onclick="return confirm('Yakin Nge batalin Sewanya :(')" class="btn btn-sm btn-danger" href="<?php echo base_url('customer/transaksi/batal_transaksi/'.$tr->id_sewa) ?>">Batal Sewa</a>
					 <?php }else{ ?>
					 	<a onclick="return confirm('Maaf, transaksi ini sudah selesai, dan tidak bisa dibatalkan')" class="btn btn-sm btn-danger" href="">Batal Sewa</a>
					 <?php } ?>
					 </td>
				</tr>
				<?php endforeach ?>
			</table>
		</div>
		</div>
	</div>
</div>
</section>