  <form id="payment-form" method="post" action="<?=site_url()?>booking/deadline/<?= $detail->kode_booking ?>">
  	<input type="hidden" name="result_type" id="result-type" value=""></div>
  	<input type="hidden" name="result_data" id="result-data" value=""></div>
  </form>
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
  						<input type="hidden" name="kode_booking" value="<?= $detail->kode_booking ?>">
  						<table class="table table-bordered">
  							<thead>
  								<tr>
  									<th>Kode Booking</th>
  									<th>Tanggal</th>
  									<th>Jam</th>
  									<th>Layanan</th>
  									<th>Harga</th>
  									<th>Hewan</th>
  									<th>Status</th>
  								</tr>
  							</thead>
  							<tbody>
  								<tr>
  									<td><?= $detail->kode_booking ?></td>
  									<td><?= $detail->tanggal ?></td>
  									<td><?= $detail->jam ?></td>
  									<td><?= $detail->jenis_grooming ?></td>
  									<td>Rp. <?= number_format($detail->harga_grooming) ?>-,</td>
  									<td><?= $detail->hewan ?></td>
  									<td><?= $detail->status ?></td>
  								</tr>
  							</tbody>
  						</table>
  						<hr>


  						<hr>
  						<h6 class="text-center">Total Tagihan</h6>
  						<h4 class="text-center">Rp. <?= number_format($detail->harga_grooming) ?></h4>
  						<hr>
  						<center>
  							<button id="pay-button" class="btn btn-primary">Pilih Metode Pembayaran</button>
  						</center>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>