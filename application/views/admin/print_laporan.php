<h3 class="mt-3"style="text-align: center">Laporan Transaksi Penyewaan Villa</h3>
<table>
	<tr>
		<td class="text-danger">Dari Tanggal</td>
		<td>:</td>
		<td class="text-danger"><?php echo date('d-m-Y',strtotime($_GET['dari'])) ?></td>
	</tr>

	<tr>
		<td class="text-success">Sampai Tanggal</td>
		<td>:</td>
		<td class="text-success"><?php echo date('d-m-Y',strtotime($_GET['sampai'])) ?></td>
	</tr>

</table>

<table class="table table-border table-striped mt-4">
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

<script type="text/javascript">
	window.print();
</script>