<section id="our-feature" class="sections">
            <div class="container">
                <div class="heading">
                    <div class="title text-center arrow-left">
                        <img class="hidden-xs" src="<?php echo base_url('assets/assets_shop/')?>/assets/images/left-arrow.png" alt="" />

                        <h4 class="">Detail Villa</h4>
                    </div>
                </div>
                <?php foreach($detail as $dt) : ?>
                	<div class="row">
                		<div class="col-md-6">
                			<img src="<?php echo base_url('assets/upload/'.$dt->gambar) ?>">
                		</div>
                		<div class="col-md-6">
                			<table class="table table-bordered">
                				<tr>
                					<th>Nama Villa</th>
                					<td><?php echo $dt->merk ?></td>
                				</tr>
                				<tr>
                					<th>No Villa</th>
                					<td><?php echo $dt->no_villa ?></td>
                				</tr>
                				<tr>
                					<th>Lokasi</th>
                					<td><?php echo $dt->lokasi ?></td>
                				</tr>
                				<tr>
                					<th>Type</th>
                					<td><?php echo $dt->kode_type ?></td>
                				</tr>
                					<th>Warna</th>
                					<td><?php echo $dt->warna ?></td>
                				<tr>
                                </tr>
                                    <th>Fasilitas</th>
                                    <td><?php echo $dt->fasilitas ?></td>
                                <tr>
                					<th><span class="btn btn-info">Status</th></span>
                					<td>
                					<?php if($dt->status == '0'){
                                    echo "<span class='btn btn-danger' disable>Sedang Dalam Penyewaan</span>";
                                    }else{
                                    echo "<span class='btn btn-success' disable>Tidak Dalam Penyewaan</span>";
                                     }
                                    ?>

                                    <?php 
                                    if($dt->status == "0"){
                                    echo "<span class='btn btn-danger' disable>FULL</span>";
                                    }else{
                                    echo anchor('customer/booking/tambah_booking/'.$dt->id_villa,'<button class="btn btn-success">Booking</button>');
                                     }
                                    ?> 
                                </td>	 
                				</tr>
                			</table>
                		</div>
                	</div>
                <?php endforeach; ?>

             </div>		
        </div>
    </section>