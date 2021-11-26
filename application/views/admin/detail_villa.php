<div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Detail Villa</h1>
          </div>
      </section>

      <?php foreach ($detail as $dt) : ?>
        <div class="card bg-secondary">
          <div class="card-body">

            <div class="row">
              <div class="col-md-5">
                <img src="<?php echo base_url().'assets/upload/'.$dt->gambar ?>">
              </div>
              <div class="col-md-7">
              <table class="table">
                <tr>
                  <td>Type Villa</td>
                  <td>
                  <?php 
                      if ($dt->kode_type == "VLA"){
                        echo "Villa01";
                      }else if($dt->kode_type == "VLL") {
                        echo "Villa02";
                      }else if($dt->kode_type == "VAA") {
                        echo "Villa03";
                      }else{
                        echo "<span class='text-danger'>Type Villa Belum Terdaftar</span>";
                      }
                   ?>
                   </td>
                </tr>

                <tr>
                  <td>Nama Villa</td>
                  <td><?php echo $dt->merk ?></td>
                </tr>

                <tr>
                  <td>No Villa</td>
                  <td><?php echo $dt->no_villa ?></td>
                </tr>

                <tr>
                  <td>Warna</td>
                  <td><?php echo $dt->warna ?></td>
                </tr>

                <tr>
                  <td>Lokasi</td>
                  <td><?php echo $dt->lokasi ?></td>
                </tr>

                <tr>
                  <td>Fasilitas</td>
                  <td><?php echo $dt->fasilitas ?></td>
                </tr>

                <tr>
                  <td>Harga</td>
                  <td><?php echo number_format($dt->harga,0,',','.') ?> /hari </td>
                </tr>

                <tr>
                  <td>Status</td>
                  <td>
                  <?php 
                      if($dt->status == "0"){
                        echo "<span class='badge badge-danger'>Kosong</span>";
                      }else{
                        echo "<span class='badge badge-success'>Tersedia</span>";
                      }

                   ?>
                   </td>
                </tr>
                
              </table>

              <a class="btn btn-sm btn-danger ml-4" href="<?php echo base_url('admin/data_villa/') ?>">Kembali</a>
              <a class="btn btn-sm btn-info" href="<?php echo base_url('admin/data_villa/update_villa/'.$dt->id_villa) ?>">Update</a>
              </div>
            </div>
          </div>
        </div>

      <?php endforeach; ?>
  </div>