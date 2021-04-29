
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2>Booking</h2>
			</div>
		</div>
		<div class="row d-flex no-gutters">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<h5><?= $detail->jenis_grooming ?> - Rp. <?= number_format($detail->harga_grooming) ?></h5>
						<?php  
						echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
						if ($this->session->flashdata('danger'))
						{
							echo '<div class="alert alert-success alert-slide-up">';
							echo $this->session->flashdata('danger');
							echo '</div>';
						}

						if ($this->session->flashdata('sukses'))
						{
							echo '<div class="alert alert-success alert-slide-up">';
							echo $this->session->flashdata('sukses');
							echo '</div>';
						}
						$kode_transaksi = date('dmY') . strtoupper(random_string('alnum', 8));
						?>
						<form action="<?= base_url() ?>booking/checkout" method="post">
							<div class="row">
								<input type="hidden" name="id_jenis_grooming" value="<?= $detail->id_jenis_grooming ?>">
								<input type="hidden" name="id_pelanggan" value="<?= $this->session->userdata('id_pelanggan') ?>">
								<div class="col-md-12">
									<label for="">Kode Booking</label>
									<input type="text" name="kode_booking" class="form-control" value="<?php echo $kode_transaksi ?>" readonly>
								</div>
								<div class="col-md-6">
									<label for="">Tanggal</label>
									<input type="date" name="tanggal" value="<?= $tanggal ?>" class="form-control" readonly="">
								</div>
								<div class="col-md-6">
									<label for="">Jam</label>
									<input type="time" name="jam" value="<?= $jam ?>" class="form-control" readonly="">
								</div>
								<div class="col-md-12">
									<label for="">Jenis Hewan</label>
									<select name="hewan" id="" class="form-control" required="">
										<option value="">- Pilih Jenis Hewan -</option>
										<option value="Kucing">Kucing</option>
										<option value="Anjing">Anjing</option>
									</select>
								</div>
							</div>
							<hr>
							<button type="submit" class="btn btn-primary">Checkout</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
