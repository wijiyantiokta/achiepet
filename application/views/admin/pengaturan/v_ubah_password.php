<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Pengaturan Profil</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Pengaturan</li>
            <li class="breadcrumb-item active">Profil</li>
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
            <form action="<?= base_url() ?>admin/pengaturan/ubah_password" method="post" enctype="multipart/form-data">
              <input type="hidden" name="username" value="<?= $data->username ?>">
              <div class="form-group">
                <label for="">Password Lama</label>
                <input type="password" name="pass"  class="form-control" placeholder="Password Lama" required>
              </div>
              <div class="form-group">
                <label for="">Password Baru</label>
                <input type="password" name="password" class="form-control" placeholder="Password Baru" required>
              </div>
              <div class="form-group">
                <label for="">Konfirmasi Password</label>
                <input type="password" name="repassword" class="form-control" placeholder="Konfirmasi Password" required>
              </div>
              <hr>
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