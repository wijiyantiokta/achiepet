<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ubah Data Layanan Grooming</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ubah Data Layanan Grooming</li>
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
              <h3 class="card-title">Pengelolaan Data Layanan Grooming</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="<?= base_url() ?>admin/jenis" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
              <hr>
              <form action="<?= base_url() ?>admin/jenis/edit/<?= $data->id_jenis_grooming ?>" method="post">
                <div class="form-group">
                  <label for="">Jenis Grooming</label>
                  <input type="text" name="jenis_grooming" value="<?= $data->jenis_grooming ?>" class="form-control" placeholder="Jenis Grooming" required="">
                </div>
                <div class="form-group">
                  <label for="">Harga</label>
                  <input type="number" name="harga" value="<?= $data->harga_grooming ?>" class="form-control" placeholder="Harga" required="">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-edit"></i> Ubah</button>
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