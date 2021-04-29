
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url() ?>public/admin/dist/css/style.css">
    <link rel="icon" href="<?= base_url() ?>public/media/upload-pengaturan/logoatas.png" type="image/x-icon">
</head>
<style>
    .laporan {
        margin-top: 50px;
        margin-left: 20px;
        margin-right: 20px;
    }
</style>

<body onLoad="window.print()">
    <div class="laporan">
        <div class="card">
            <div class="card-header">
             <h4 class="text-center"><u>LAPORAN TRANSAKSI</u></h4>
             <hr>
             <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama</th>
						<th>Tanggal</th>
						<th>Jam</th>
						<th>Jenis Grooming</th>
						<th>Hewan</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                  <?php if (empty($data)): ?>
                    <th colspan="8" class="text-center">Tidak ada data obat keluar pada bulan & tahun yang Anda pilih!</th>
                    <?php else: ?>
                        <?php  
                        $totalsemua = 0;
                        ?>
                        <?php foreach ($data as $key => $dt) : ?>
                            <?php $totalsemua += $dt->harga_grooming ?>
                            <tr>
                                <td><?= $key+1 ?></td>
                                <td><?= $dt->nama_pelanggan ?></td>
								<td><?= $dt->tanggal ?></td>
								<td><?= $dt->jam ?></td>
								<td><?= $dt->jenis_grooming ?></td>
								<td><?= $dt->hewan ?></td>
                                <td>Rp. <?= number_format($dt->harga_grooming) ?></td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                    <tfoot>
                        <th colspan="6" class="text-center">TOTAL</th>
                        <th><h5 >Rp. <?= number_format($totalsemua) ?></h5></th>
                    </tfoot>
                <?php endif ?>
            </table>
            <br><br>
            <table width="100%">
                <tr>
                    <td></td>
                    <td width="300px">
                        <p>Pimpinan,</p>
                        <br>
                        <br>
                        <br>
                        <p>drh. Asri Emelia Lubis</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>

</html>`
