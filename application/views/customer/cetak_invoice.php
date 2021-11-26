<table style="width: 60%">
    <h2>Invioce Pembayaran Anda</h2>
			<?php foreach($transaksi as $tr) : ?>
                <tr>
                    <td>Nama Customer</td>
                    <td>:</td>
                    <td><b><?php echo $tr->nama ?></td></b>
                </tr>
			<tr>
				<td>Nama Villa</td>
				<td>:</td>
				<td><b><?php echo $tr->merk ?></td></b>
			</tr>
			<tr>
				<td>Check In</td>
				<td>:</td>
				<td><b><?php echo $tr->tanggal_sewa ?></td></b>
			</tr>
			<tr>
				<td>Check Out</td>
				<td>:</td>
				<td><b><?php echo $tr->tanggal_selesai ?></td></b>
			</tr>
			<tr>
				<td>Biaya Sewa/Hari</td>
				<td>:</td>
				<td><b><?php echo number_format($tr->harga,0,',','.') ?></td></b>
			</tr>
			<tr>
				<?php 
					$x = strtotime($tr->tanggal_selesai);
					$y = strtotime($tr->tanggal_sewa);
					$jmlHari = abs(($x - $y)/(60*60*24));

				 ?>
				<td>Hari Sewa</td>
				<td>:</td>
				<td><b><?php echo $jmlHari ?> Hari </td></b>
			</tr>

            <tr>
                <td>Status Pembayaran</td>
                <td>:</td>
                <td>
                    <?php if($tr->status_pembayaran == '0'){
                    echo "Belum Lunas";
                    } else{
                        echo "Lunas";
                    } 

                    ?>
                        
                </td>
            </tr>

			<tr style="font-weight: bold; color: red">
				<td>Jumlah Pembayaran</td>
				<td>:</td>
				<td>Rp. <?php echo number_format($tr->harga*$jmlHari,0,',','.') ?></td>
			</tr>

            <tr>
                <td>Rekening Pembayaran</td>
                <td>:</td>
                <td>
                    <ul>
                        <li>Bank Mandiri : 001324567718802</li>
                        <li>Bank BCA : 002324567718803</li>
                    </ul>
                </td>
            </tr>

			<?php endforeach; ?>
		</table>

<script type="text/javascript">
    window.print();
</script>