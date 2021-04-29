<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Ubah Data Bank</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Ubah Data Bank</li>
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
              <h3 class="card-title">Pengelolaan Data Bank</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <a href="<?= base_url() ?>admin/bank" class="btn btn-warning"><i class="fa fa-arrow-left"></i> Kembali</a>
              <hr>
              <form enctype="multipart/form-data" action="<?= base_url() ?>admin/bank/edit/<?= $detail->id_bank ?>" method="post">
                <div class="form-group">
                  <label for="">Bank</label>
                  <input type="text" name="bank" value="<?= $detail->bank ?>" class="form-control" placeholder="Bank" required="">
                </div>
                <div class="form-group">
                  <label for="">Nomor Rekening</label>
                  <input type="text" name="norek" value="<?= $detail->nomor_rekening ?>" class="form-control" placeholder="Nomor Rekening" required="">
                </div>
                <div class="form-group">
                  <label for="">Atas Nama</label>
                  <input type="text" name="atas_nama" value="<?= $detail->atas_nama ?>" class="form-control" placeholder="Atas Nama" required="">
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2">
                      <img width="120" src="<?= base_url() ?>public/media/upload-bank/<?= $detail->logo ?>" alt="">
                    </div>
                    <div class="col-md-10">
                      <label for="">Foto</label>
                      <input type="file" name="logo" class="form-control">
                    </div>
                  </div>

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
</div>Ubah