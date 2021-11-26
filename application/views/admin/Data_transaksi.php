<div class="main-content">
	<section class="section">
		<div class="section-header">
			<h1>Data Transaksi</h1>
		</div>

		<?php echo $this->session->flashdata('pesan') ?>

		<div class="table-responsive">
		<table class="table table-border table-striped bg-secondary">
			<tr>
				<th>No</th>
				<th>Customer</th>
				<th>Villa</th>
				<th>Tgl. Sewa</th>
				<th>Tgl. Selesai</th>
				<th>Harga/hari</th>
				<th>Tgl. Penselesaian</th>
				<th>Status Penselesaian</th>
				<th>Status Sewa</th>
				<th>Cek Pembayaran</th>
				<th>Action</th>
			</tr>

			<?php $no=1;
			foreach($transaksi as $tr) : ?>

				<tr>
					<td><?php echo $no++ ?></td>
					<td><?php echo $tr->nama ?></td>
					<td><?php echo $tr->merk ?></td>
					<td><?php echo date('d/m/Y',strtotime($tr->tanggal_sewa )); ?></td>
					<td><?php echo date('d/m/Y',strtotime($tr->tanggal_selesai )); ?></td>
					<td>Rp.<?php echo number_format($tr->harga,0,',','.')?></td>
					<td>
						<?php 

							if($tr->tanggal_penselesaian == "0000-00-00"){
								echo "-";
							}else{
								echo date('d/m/Y', strtotime($tr->tanggal_penselesaian));
							}

						 ?>
					</td>

					<td><?php echo $tr->status_penselesaian?></td>

					<td><?php echo $tr->status_sewa?></td>

					<td>
						<center>
							<?php

							if (empty($tr->bukti_pembayaran)) { ?>
								<button class="btn btn-sm btn-danger"><i class="fas fa-times-circle"></i></button>
							<?php } else{ ?>
								<a class ="btn btn-sm btn-primary" href="<?php echo base_url('admin/transaksi/pembayaran/'.$tr->id_villa) ?>"><i class="fas fa-check-circle"></i></a>
							<?php } ?>
						</center>
					</td>

					<td>
						<?php

							if($tr->status == "1"){
								echo "-";
							}else{ ?>

								<div class="row">
									<a class="btn btn-sm btn-success mr-2" href="<?php echo base_url('admin/transaksi/transaksi_selesai/'.$tr->id_sewa) ?>"><i class="fas fa-check"></i></a>
									<a onclick="return confirm('Yakin Batalin Transaksi')" class="btn btn-sm btn-danger" href="<?php echo base_url('admin/transaksi/batal_transaksi/'.$tr->id_sewa) ?>"><i class="fas fa-times"></i></a>
								</div>
							<?php } ?>
						  
					</td>
				</tr>

			<?php endforeach; ?>
		</table>
		</div>
	</section>
</div>