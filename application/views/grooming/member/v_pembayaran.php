 <!-- <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>public/template/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url() ?>home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Pembayaran <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Pembayaran</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
       <div class="card">
        <div class="card-body">
          <i class="fa fa-user"></i> <a href="<?= base_url() ?>member">Profil</a>
          <hr>
          <i class="fa fa-shopping-bag"></i> <a href="<?= base_url() ?>member/order">Riwayat Booking</a>
          <hr>
          <i class="fa fa-power-off"></i> <a href="<?= base_url() ?>login/logout">Keluar</a>
        </div>
      </div>
    </div>
    <div class="col-md-9">
      <div class="card">
        <div class="card-body">
         <h3 class="text-center">Pembayaran</h3>
         <hr>
         <?php if (empty($data)): ?>
          <div class="alert alert-info"><i class="fa fa-info-circle"></i> Jumlah yang harus Anda bayarkan adalah Rp. <?= number_format($detail->harga_grooming) ?></div>
          <form action="<?= base_url() ?>member/pembayaran/<?= $detail->id_booking ?>" method="post" enctype="multipart/form-data">
           <div class="form-group">
             <label for="">Jumlah</label>
             <input type="text" name="jumlah" value="<?= $detail->harga_grooming ?>" class="form-control" placeholder="Jumlah" readonly="">
             <input type="hidden" name="id_pelanggan" value="<?= $this->session->userdata('id_pelanggan') ?>">
             <input type="hidden" name="id_booking" value="<?= $detail->id_booking ?>">
           </div>
           <div class="form-group">
             <label for="">Bukti</label>
             <input type="file" name="bukti"  class="form-control" readonly="">
           </div>
           <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</button>
           <button type="reset" class="btn btn-info"><i class="fa fa-refresh"></i> Reset</button>
         </form>
         <?php else: ?>
          <div class="row">
            <div class="col-md-8">
              <table class="table table-striped">
                <tr>
                  <th>Jenis Grooming</th>
                  <th>:</th>
                  <th><?= $detail->jenis_grooming ?></th>
                </tr>
                <tr>
                  <th>Harga</th>
                  <th>:</th>
                  <th><?= $detail->harga_grooming ?></th>
                </tr>
                <tr>
                  <th>Hewan</th>
                  <th>:</th>
                  <th><?= $detail->hewan ?></th>
                </tr>
              </table>
            </div>
            <div class="col-md-4">
              <img width="300" class="img-thumbnail" src="<?= base_url() ?>public/media/upload-bukti/<?= $data->bukti ?>" alt="">
            </div>
          </div>
        <?php endif ?>
      </div>
    </div>


  </div>
</div>
</div>
</section> -->
