<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ubah Data User Admin</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ubah Data User Admin</li>
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
              <a href="<?= base_url() ?>admin/user" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
              <hr>
              <form enctype="multipart/form-data" action="<?= base_url() ?>admin/user/edit/<?= $detail->id_admin ?>" method="post">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama" value="<?= $detail->nama ?>" class="form-control" placeholder="Nama" required="">
                </div>
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" name="username" value="<?= $detail->username ?>" class="form-control" placeholder="Username" required="">
                </div>
                
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select name="jk" id="" class="form-control" required="">
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="L" <?php if ($detail->jenis_kelamin=="L") {echo "selected";} ?>>Laki-Laki</option>
                    <option value="P" <?php if ($detail->jenis_kelamin=="P") {echo "selected";} ?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-32">
                      <?php if (empty($detail->foto)): ?>
                        <img width="90" src="<?= base_url() ?>public/media/upload-admin/no-img.jpg" alt="">
                        <?php else: ?>
                          <img width="90" src="<?= base_url() ?>public/media/upload-admin/<?= $detail->foto ?>" alt="">
                        <?php endif ?>
                      </div>
                      <div class="col-md-10">
                       <label for="">Foto</label>
                       <input type="file" name="foto" class="form-control">
                     </div>
                   </div>

                 </div>
                 <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" name="alamat" value="<?= $detail->alamat ?>" class="form-control" placeholder="Alamat" required="">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Ubah</button>
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