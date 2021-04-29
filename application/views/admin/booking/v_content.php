<?php 
date_default_timezone_set('Asia/Jakarta');
?>
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Booking</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Booking</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<!-- Main content -->
	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">

					<!-- /.card -->

					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Pengelolaan Data Booking</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>Tanggal</th>
										<th>Nama Pelanggan</th>
										<th>Jenis Grooming</th>
										<th>Total</th>
										<th>Hewan</th>
										<th>Status</th>
										<th>Tindakan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($data as $key => $value): ?>
										<tr>
											<td width="5%"><?= ++$key ?></td>
											<td><?= date('d-m-Y', strtotime($value->tanggal)) ?> <?= $value->jam ?></td>
											<td><?= $value->nama_pelanggan ?></td>
											<td><?= $value->jenis_grooming ?></td>
											<td>Rp. <?= number_format($value->harga_grooming) ?></td>
											<td><?= $value->hewan ?></td>
											<?php if(date("Y-m-d H:i:s") > $value->qq and $value->status == "Pending"){
												$status = "Dibatalkan";
											} else {
												$status = $value->status;
											} ?>
											<td><?= $status ?></td>
											<td width="5%">
												<?php if ($value->status == 'Lunas') { ?>
													<span class="badge badge-success"><i class="fa fa-check"></i></span>                
												<?php } elseif (date("Y-m-d H:i:s") > $value->qq and $value->status == "Pending") { ?>
													<span class="badge badge-danger"><i class="fa fa-times"></i></span>		
												<?php }else{ ?>
													<span class="badge badge-warning"><i class="fa fa-spinner"></i></span>													 
												<?php } ?>

											</td>
										</tr>
									<?php endforeach ?>

								</tbody>

							</table>
						</div>
						<!-- /.card-body -->
					</div>
					<!-- /.card -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
