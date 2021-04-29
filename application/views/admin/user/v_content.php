<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Manajemen User Admin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manajemen User Admin</li>
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
              <h3 class="card-title">Pengelolaan Data User Admin</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="<?= base_url() ?>admin/user/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
              <hr>
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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Jenis Kelamin</th>
                    <th>Foto</th>
                    <th>Alamat</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $key => $value): ?>
                    <tr>
                      <td width="5%"><?= $key+1 ?></td>
                      <td><?= $value->nama ?></td>
                      <td><?= $value->username ?></td>
                      <td><?= $value->jenis_kelamin ?></td>
                      <td>
                        <?php if (empty($value->foto)): ?>
                          <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-admin/no-img.jpg" alt="">
                          <?php else: ?>
                            <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-admin/<?= $value->foto ?>" alt="">
                          <?php endif ?>
                        </td>
                        <td><?= $value->alamat ?></td>
                        <td width="20%">
                          <a href="<?= base_url() ?>admin/user/edit/<?= $value->id_admin  ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                          <a href="<?= base_url() ?>admin/user/delete/<?= $value->id_admin  ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
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