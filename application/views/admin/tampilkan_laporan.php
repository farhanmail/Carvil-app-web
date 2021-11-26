<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Laporan Transaksi</h1>
          </div>
      </section>

      <form method="POST" action="<?php echo base_url('admin/laporan') ?>">
      	<div class="form-group">
      		<label>Dari Tanggal</label>
      		<input type="date" name="dari" class="form-control">
      		<?php echo form_error('dari','<span class="text-small text-danger">','</span>') ?>
      	</div>

      	<div class="form-group">
      		<label>Sampai Tanggal</label>
      		<input type="date" name="sampai" class="form-control">
      		<?php echo form_error('sampai','<span class="text-small text-danger">','</span>') ?>
      	</div>

      	<button type="submit" class="btn btn-sm btn-success"><i class="fas fa-eye"></i> Tampilkan Data</button>
      	
      </form><hr>

      <div class="btn-group">
        <a class="btn btn-sm btn-primary" target="_blank" href="<?php echo base_url().'admin/laporan/print_laporan/?dari='.set_value('dari').'&sampai='.set_value('sampai') ?>"><i class="fas fa-print"> Print</a></i>
      </div>

      <div class="table-responsive mt-3 bg-secondary">
    <table class="table table-border table-striped">
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
      </tr>

      <?php $no=1;
      foreach($laporan as $tr) : ?>

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
        </tr>

      <?php endforeach; ?>
    </table>
    </div>
  </div>