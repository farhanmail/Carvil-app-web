<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Villa</h1>
          </div>

          <a href="<?php echo base_url('admin/data_villa/tambah_villa') ?>" class="btn btn-primary mb-3">Tambah Data</a>

          <?php echo $this->session->flashdata('pesan') ?>

          <table class="table table-hover table-striped table-borderd bg-secondary">
          	<thead>
              <tr>
              		<th>No</th>
              		<th>Gambar</th>
              		<th>Type</th>
              		<th>Nama Villa</th>
              		<th>No Villa</th>
              		<th>Status</th>
              		<th>Aksi</th>
              </tr>
          	</thead>
          	<tbody>
          		<?php  
          			$no=1;
          			foreach($villa as $mb) : ?>
                  <tr>
              				<td><?php echo $no++ ?></td>
              				<td>
                          <img width="60px" src="<?php echo base_url().'assets/upload/'.$mb->gambar ?>">    
                      </td>
              				<td><?php echo $mb->kode_type ?></td>
              				<td><?php echo $mb->merk ?></td>
              				<td><?php echo $mb->no_villa ?></td>
              				<td><?php
                      if ($mb->status == "0"){
                        echo "<span class='badge badge-danger'>X</span>";
                      }else {
                        echo "<span class='badge badge-success'>✓</span>";
                      }
                        

                        ?></td>
                        <td>
                          <a href="<?php echo base_url('admin/data_villa/detail_villa/').$mb->id_villa ?>" class="btn btn-sm btn-success"><i class="fas fa-eye"></i></a>
                          <a href="<?php echo base_url('admin/data_villa/delete_villa/').$mb->id_villa ?>" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i></a>
                          <a href="<?php echo base_url('admin/data_villa/update_villa/').$mb->id_villa ?>" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                        </td>
                    </tr>
          		<?php endforeach; ?>
          	</tbody>
          </table>

      </section>
  </div>