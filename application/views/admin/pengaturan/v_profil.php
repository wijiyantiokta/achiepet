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
            <form action="<?= base_url() ?>admin/pengaturan/profil" method="post">
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="">Nama</label>
                  <input type="text" name="nama"  value="<?= $data->nama ?>" class="form-control" placeholder="Nama" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Username</label>
                  <input type="text" name="username"  value="<?= $data->username ?>" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group col-md-6">
                  <label for="">Jenis Kelamin</label>
                  <select name="jk" class="form-control" required="">
                    <option value="L" <?php if ($data->jenis_kelamin=='L') {echo "selected";} ?>>Laki-Laki</option>
                    <option value="P" <?php if ($data->jenis_kelamin=='P') {echo "selected";} ?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <div class="row">
                    <div class="col-md-3">
                      <?php if (empty($data->foto)): ?>
                        <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-admin/no-img.jpg" alt="">
                        <?php else: ?>
                          <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-admin/<?= $data->foto ?>" alt="">
                        <?php endif ?>
                      </div>
                      <div class="col-md-9">
                        <label for="">Foto</label>
                        <input type="file" name="foto" class="form-control">
                      </div>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
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