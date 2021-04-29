<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengaturan Instansi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengaturan</li>
            <li class="breadcrumb-item active">Instansi</li>
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
              <h3 class="card-title">Pengelolaan Data Pengaturan</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
             <?php  
             echo validation_errors('<div class="alert alert-danger alert-slide-up">','</div>');
             if ($this->session->flashdata('danger'))
             {
              echo '<div class="alert alert-danger alert-slide-up">';
              echo $this->session->flashdata('danger');
              echo '</div>';
            }

            if ($this->session->flashdata('sukses'))
            {
              echo '<div class="alert alert-success alert-slide-up">';
              echo $this->session->flashdata('sukses');
              echo '</div>';
            }
            ?>
            <form action="<?= base_url() ?>admin/pengaturan/instansi" method="post">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="">Nama Instansi</label>
                  <input type="text" name="nama"  value="<?= $data->nama ?>" class="form-control" placeholder="Nama Instansi" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Pimpinan</label>
                  <input type="text" name="pimpinan"  value="<?= $data->pimpinan ?>" class="form-control" placeholder="Pimpinan" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Telepon</label>
                  <input type="number" name="telepon" value="<?= $data->telepon ?>" class="form-control" placeholder="Telepon" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Email</label>
                  <input type="email" name="email" value="<?= $data->email ?>" class="form-control" placeholder="Harga" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Website</label>
                  <input type="text" name="site" value="<?= $data->site ?>" class="form-control" placeholder="Website" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Alamat</label>
                  <input type="text" name="alamat" value="<?= $data->alamat ?>" class="form-control" placeholder="Alamat" required="">
                </div>
              </div>

              <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
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