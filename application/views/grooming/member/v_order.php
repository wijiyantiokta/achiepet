<?php 
date_default_timezone_set('Asia/Jakarta');
?>
<style>
	.btn-group-xs > .btn, .btn-xs {
		padding: .25rem .25rem;
		font-size: .600rem;
		line-height: .5;
		border-radius: .2rem;
	}
</style>
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>public/template/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url() ?>home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Riwayat Booking <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-0 bread">Riwayat Booking</h1>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-3">
				<div class="card">
					<div class="card-body">
						<i class="fa fa-user"></i> <a href="<?= base_url() ?>member">Profil</a>
						<hr>
						<i class="fa fa-shopping-bag"></i> <a href="<?= base_url() ?>member/order">Riwayat Booking</a>
						<hr>
						<i class="fa fa-power-off"></i> <a href="<?= base_url() ?>login/logout">Keluar</a>
					</div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="card">
					<div class="card-body">
						<h3 class="text-center">Riwayat Booking</h3>
						<hr>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>No.</th>
									<th>Tanggal</th>
									<th>Jenis Booking</th>
									<th>Harga</th>
									<th>Hewan</th>
									<th>Batas</th>
									<th>Tindakan</th>
								</tr>
							</thead>
							<tbody>
								<?php $no =1; foreach ($order as $key): ?>
								<tr>
									<td><?php echo $no++ ?></td>
									<td><?php echo $key->tanggal ?> <?php echo $key->jam ?></td>
									<td><?php echo $key->jenis_grooming ?></td>
									<td><?php echo $key->harga_grooming ?></td>
									<td><?php echo $key->hewan ?></td>
									<td><?php echo $key->qq ?></td>
									<td>
										<?php if ($key->status=="Lunas"): ?>
											<a href="#" class="btn btn-info btn-xs" target="blank"> Lunas</a>
										<?php endif ?>

										<?php if ($key->status=="Menunggu Konfirmasi"): ?>
											<a href="#" class="btn btn-warning btn-xs"> Menunggu Konfirmasi</a>
										<?php endif ?>

										<?php if (date("Y-m-d H:i:s") > $key->qq and $key->status == "Pending") { ?>
											<a href="#" class="btn btn-danger btn-xs"> Dibatalkan</a>
										<?php } else { ?>
											<a href="<?= base_url() ?>transaction/pembayaran/<?= $key->token ?>/<?= $key->kode_booking ?>" class="btn btn-success btn-xs"> Pembayaran</a>
										<?php } ?>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>


		</div>
	</div>
</div>
</section>
