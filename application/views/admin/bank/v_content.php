<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Bank</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Bank</li>
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
              <a href="<?= base_url() ?>admin/bank/add" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</a>
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
                    <th>Bank</th>
                    <th>Nomor Rekening</th>
                    <th>Atas Nama</th>
                    <th>Logo</th>
                    <th>Tindakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data as $key => $value): ?>
                    <tr>
                      <td width="5%"><?= $key+1 ?></td>
                      <td><?= $value->bank ?></td>
                      <td><?= $value->nomor_rekening ?></td>
                      <td><?= $value->atas_nama ?></td>
                      <td>
                        <?php if (empty($value->logo)): ?>
                          <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-bank/no-img.jpg" alt="">
                          <?php else: ?>
                            <img class="img-thumbnail" width="100" src="<?= base_url() ?>public/media/upload-bank/<?= $value->logo ?>" alt="">
                          <?php endif ?>
                        </td>
                        <td width="20%">
                          <a href="<?= base_url() ?>admin/bank/edit/<?= $value->id_bank  ?>" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>
                          <a href="<?= base_url() ?>admin/bank/delete/<?= $value->id_bank  ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><i class="fa fa-trash"></i> Hapus</a>
                        </td>
                      </tr>
                    <?php endforeach ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>