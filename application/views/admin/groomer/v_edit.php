<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tambah Data Groomer</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tambah Data Groomer</li>
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
              <h3 class="card-title">Pengelolaan Data Groomer</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="<?= base_url() ?>admin/groomer" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
              <hr>
              <form action="<?= base_url() ?>admin/groomer/edit/<?= $detail->id_groomer ?>" method="post">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama" value="<?= $detail->nama_groomer ?>" class="form-control" placeholder="Nama" required="">
                </div>
                
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select name="jk" id="" class="form-control" required="">
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="L" <?php if ($detail->jk_groomer=="L") {echo "selected";} ?>>Laki-Laki</option>
                    <option value="P" <?php if ($detail->jk_groomer=="P") {echo "selected";} ?>>Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Telepon</label>
                  <input type="number" name="telepon" value="<?= $detail->telepon_groomer ?>" class="form-control" placeholder="Telepon" required="">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" name="alamat" value="<?= $detail->alamat_groomer ?>" class="form-control" placeholder="Alamat" required="">
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