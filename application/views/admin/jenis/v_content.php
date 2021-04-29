<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Layanan Grooming</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Layanan Grooming</li>
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
              <a href="<?= base_url() ?>admin/jenis/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                    <th>Jenis Grooming</th>
                    <th>Harga</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $key => $value): ?>
                    <tr>
                      <td width="5%"><?= $key+1 ?></td>
                      <td><?= $value->jenis_grooming ?></td>
                      <td>Rp. <?= number_format($value->harga_grooming) ?></td>
                      <td width="20%">
                        <a href="<?= base_url() ?>admin/jenis/edit/<?= $value->id_jenis_grooming  ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah</a>
                        <a href="<?= base_url() ?>admin/jenis/delete/<?= $value->id_jenis_grooming  ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
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