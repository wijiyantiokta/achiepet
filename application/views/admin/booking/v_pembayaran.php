<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pembayaran</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pembayaran</li>
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
              <h3 class="card-title">Pengelolaan Data Pembayaran</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="<?= base_url() ?>admin/booking" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
              <hr>
              <?php if (empty($data)): ?>
                <div class="alert alert-danger"><i class="fa fa-info-circle"></i> Pelanggan belum melakukan pembayaran!</div>
                <?php else: ?>
                  <div class="row">
                    <div class="col-md-8">
                      <table class="table table-striped">
                        <tr>
                          <th>Jenis Grooming</th>
                          <th>:</th>
                          <th><?= $detail->jenis_grooming ?></th>
                        </tr>
                        <tr>
                          <th>Harga</th>
                          <th>:</th>
                          <th><?= $detail->harga_grooming ?></th>
                        </tr>
                        <tr>
                          <th>Hewan</th>
                          <th>:</th>
                          <th><?= $detail->hewan ?></th>
                        </tr>
                      </table>
                    </div>
                    <div class="col-md-4">
                      <img width="300" class="img-thumbnail" src="<?= base_url() ?>public/media/upload-bukti/<?= $data->bukti ?>" alt="">
                    </div>
                  </div>
                  <?php if ($detail->status=="Lunas"): ?>
                    <?php else: ?>
                      <a href="<?= base_url() ?>admin/booking/konfirmasi/<?= $detail->id_booking ?>" class="btn btn-success"><i class="fa fa-check"></i> Konfirmasi</a>
                    <?php endif ?>
                  <?php endif ?>
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