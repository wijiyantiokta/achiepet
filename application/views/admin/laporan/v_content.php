<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laporan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
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
              <h3 class="card-title">Pengelolaan Data Laporan</h3>
            </div>
            <div class="card-body">
              <form method="GET" action="<?= base_url() ?>admin/laporan/cetak" target="blank">
                <div class="row">
                  <div class="form-group col-md-6">
                   <select name="bulan" id="" class="form-control">
                    <option value="">- Pilih Bulan -</option>
                    <option value="01">Januari</option>
                    <option value="02">Februari</option>
                    <option value="03">Maret</option>
                    <option value="04">april</option>
                    <option value="05">Mei</option>
                    <option value="06">Juni</option>
                    <option value="07">Juli</option>
                    <option value="08">Agustus</option>
                    <option value="09">September</option>
                    <option value="10">Oktober</option>
                    <option value="11">November</option>
                    <option value="12">Desember</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                 <select name="tahun" class="form-control">
                  <option value="">- Pilih Tahun -</option>
                  <?php  
                  $y = date('Y');
                  for ($i=2020; $i <=$y+10; $i++) { 
                    echo "<option value='$i'>$i</option>";
                  }
                  ?>
                </select>
							</div>
							<!-- <div class="form-group col-md-6">
								<select name="status" class="form-control">
									<option value="Lunas">Lunas</option>
								</select>
							</div> -->
            </div>
            <button class="btn btn-primary"><i class="fa fa-print"></i> Cetak</button>
          </form>
          
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
