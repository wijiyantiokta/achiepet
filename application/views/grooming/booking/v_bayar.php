
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="container">
		<div class="row justify-content-center pb-5 mb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h2>Pembayaran</h2>
			</div>
		</div>
		<div class="row d-flex no-gutters">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<?php if ($data->transaction_status=="settlement"): ?>
							<table class="table table-striped">
								<tr>
									<th>Kode Booking</th>
									<th>:</th>
									<th><?= $detail->kode_booking ?></th>
								</tr>
								<tr>
									<th>Tanggal Transaksi</th>
									<th>:</th>
									<th><?= format_hari_tanggal($data->transaction_time) ?></th>
								</tr>
								<tr>
									<th>Status Transaksi</th>
									<th>:</th>
									<th>
										<?php if ($data->transaction_status=="settlement"): ?>
											Lunas
											<?php else: ?>
												<?= $data->transaction_status ?>
											<?php endif ?>
										</th>
									</tr>
									<tr>
										<th>Tipe Pembayaran</th>
										<th>:</th>
										<th><?= $data->payment_type ?></th>
									</tr>
									<tr>
										<th>Bank</th>
										<th>:</th>
										<th><?= $data->va_numbers[0]->bank ?></th>
									</tr>
									<tr>
										<th>Virtual Akun</th>
										<th>:</th>
										<th><?= $data->va_numbers[0]->va_number ?></th>
									</tr>
								</table>
								<?php else: ?>
									<h3 class="text-center">Bayar Sebelum : <?= format_hari_tanggal($detail->deadline) ?></h3>
									<hr>
									<table class="table table-striped">
										<tr>
											<th>Kode Booking</th>
											<th>:</th>
											<th><?= $detail->kode_booking ?></th>
										</tr>
										<tr>
											<th>Tanggal Transaksi</th>
											<th>:</th>
											<th><?= format_hari_tanggal($data->transaction_time) ?></th>
										</tr>
										<tr>
											<th>Status Transaksi</th>
											<th>:</th>
											<th><?= $data->transaction_status ?></th>
										</tr>
										<tr>
											<th>Tipe Pembayaran</th>
											<th>:</th>
											<th><?= $data->payment_type ?></th>
										</tr>
										<tr>
											<th>Bank</th>
											<th>:</th>
											<th><?= $data->va_numbers[0]->bank ?></th>
										</tr>
										<tr>
											<th>Virtual Akun</th>
											<th>:</th>
											<th><?= $data->va_numbers[0]->va_number ?></th>
										</tr>
									</table>
									<hr>
								<?php endif ?>
								<center>
									<a href="<?= base_url() ?>member/order" class="btn btn-primary">Riwayat Booking</a>
								</center>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
