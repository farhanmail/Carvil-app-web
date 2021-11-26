<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Pesan Masuk</h1>
          </div>

          <a href="<?php echo base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Data</a>

          <?php echo $this->session->flashdata('pesan') ?>

           <table class="table table-bordered table-striped table-hover">
      <thead>
        <tr>
          <th width="20px">No</th>
          <th>Nama</th>
          <th>Emali</th>
          <th>Pesan</th>
          <th width="180px">Aksi</th>
        </tr>
      </thead>

          		<?php  
          		$no=1;
          		foreach($hubungi as $hub) : ?>
                <tr>
              		<td><?php echo $no++ ?></td>
              		<td><?php echo $hub->nama ?></td>
              		<td><?php echo $hub->email ?></td>
              		<td><?php echo $hub->pesan ?></td>
              		<td>

                    <div class="row">
              			   <a href="<?php echo base_url('admin/hubungi_kami/kirim_email/').$hub->id_hubungi ?>" class="btn btn-sm btn-success mr-2"><i class="fas fa-comment-dots"></i></a>
              			   <a href="<?php echo base_url('admin/hubungi_kami/delete/').$hub->id_hubungi ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                    </div>
              		</td>
              	
              	<?php endforeach; ?>
          </table>