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
              <form action="<?= base_url() ?>admin/groomer/add" method="post">
                <div class="form-group">
                  <label for="">Nama</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama" required="">
                </div>
                
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                  <select name="jk" id="" class="form-control" required="">
                    <option value="">- Pilih Jenis Kelamin -</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Telepon</label>
                  <input type="number" name="telepon" class="form-control" placeholder="Telepon" required="">
                </div>
                <div class="form-group">
                  <label for="">Alamat</label>
                  <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="">
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                <button type="reset" class="btn btn-info"><i class="fas fa-refresh"></i> Reset</button>
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