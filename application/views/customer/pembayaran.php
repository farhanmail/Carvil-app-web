<section id="our-feature" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="<?php echo base_url('assets/assets_shop/')?>/assets/images/left-arrow.png" alt="" />

                        <h4 class="">Pembayaran Anda</h4>
                    </div>
                </div>
    		</div>

    			<div class="col-md-6">
    				<div class="features-content active">
						<table class="table  table-striped">
    					<?php foreach($transaksi as $tr) : ?>
    					<tr>
    						<th>Nama Villa</th>
    						<td>:</td>
    						<td><b><?php echo $tr->merk ?></td></b>
    					</tr>
    					<tr>
    						<th>Check In</th>
    						<td>:</td>
    						<td><b><?php echo $tr->tanggal_sewa ?></td></b>
    					</tr>
    					<tr>
    						<th>Check Out</th>
    						<td>:</td>
    						<td><b><?php echo $tr->tanggal_selesai ?></td></b>
    					</tr>
    					<tr>
    						<th>Biaya Sewa/Hari</th>
    						<td>:</td>
    						<td><b><?php echo number_format($tr->harga,0,',','.') ?></td></b>
    					</tr>
    					<tr>
    						<?php 
    							$x = strtotime($tr->tanggal_selesai);
    							$y = strtotime($tr->tanggal_sewa);
    							$jmlHari = abs(($x - $y)/(60*60*24));

    						 ?>
    						<th>Hari Sewa</th>
    						<td>:</td>
    						<td><b><?php echo $jmlHari ?> Hari </td></b>
    					</tr>
    					<tr class="text-success">
    						<th>Jumlah Pembayaran</th>
    						<td>:</td>
    						<td><button class="btn btn-sm btn-success">Rp. <?php echo number_format($tr->harga*$jmlHari,0,',','.') ?></button> </td>
    					</tr>
    					<tr>
    						<td></td>
    						<td></td>
    						<td><a href="<?php echo base_url('customer/transaksi/cetak_invoice/'.$tr->id_sewa) ?>" class="btn btn-sm btn-info">PRINT INVOICE</a></td>
    					</tr>

    					<?php endforeach; ?>
    				</table>
    			</div>
    		</div>


<div class="col-md-6">
    				<div class="features-content active">
    					<table class="table  table-striped">
    					<tr>
    					<th class="text-success card-header">Silahkan Melakukan Pembayaran Melalui Nomer Rekening di Bawah Ini :</th>
    					</tr>
    					</table>
						<table class="table  table-striped">
    					<?php foreach($transaksi as $tr) : ?>
    					<tr>
    						
    						<ul class="list-group list-group-flush">
  							<li class="list-group-item text-danger"><b>Bank Mandiri : 001324567718802</li>
  							<li class="list-group-item text-danger">Bank BCA : 002324567718803</li>
							</ul>

                            <ul class="list-group list-group-flush">
                            <li class="list-group-item text-info text-center">-- Upload Bukti Pembayaran Anda Dibawah --</li></b>
                            </ul>

							<?php 

								if(empty($tr->bukti_pembayaran)) { ?>
									
								<?php } elseif($tr->status_pembayaran == '0'){ ?>
									<button class="btn btn-sm btn-danger">Menunggu Konfirmasi</button>
								<?php } elseif($tr->status_pembayaran == '1') { ?>
									<button class="btn btn-sm btn-success">Pembayaran Selesai</button>
								<?php } ?>
    					</tr>
    					<?php endforeach; ?>


    					<form method="POST" action="<?php echo base_url('customer/transaksi/pembayaran_aksi') ?>" enctype="multipart/form-data">
    						<div class="form-gorup">
    						<input type="hidden" name="id_villa" class="form-control" value="<?php echo $tr->id_villa ?>">
          					<input type="file" name="bukti_pembayaran" class="form-control"><br>
    					<button type="submit" class="btn btn-sm btn-success mt-3">Kirim</button>
    					</form>
    				</div>
    				</table>
    			</div>
    		</div>    					
    				
</section>

