 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>public/template/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url() ?>home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Daftar <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Daftar</h1>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="container">
    <div class="row d-flex no-gutters">
      <div class="col-md-3">

      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
           <h3 class="text-center">Daftar Sekarang</h3>
           <hr>
					 <?php
					 $huruf = "AC";
					 date_default_timezone_set('Asia/Jakarta');
					 $id_pelanggan = $huruf . date('mdhi') . strtoupper(random_string('numeric',1));
					 ?>
           <form action="<?= base_url() ?>daftar" method="post">
             <div>
						 <!-- <label for="">Id Pelanggan</label> -->
									<input type="text" name="id_pelanggan" class="form-control" value="<?php echo $id_pelanggan ?>" hidden>
						 </div>
						 <div class="form-group">
               <label for="">Nama Lengkap</label>
               <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required="">
             </div>
             <div class="form-group">
              <label for="">Username</label>
              <input type="text" name="username" class="form-control" placeholder="Username" required="">
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required="">
              <?= form_error('password'); ?>
            </div>
            <div class="form-group">
              <label for="">Email</label>
              <input type="text" name="email" class="form-control" placeholder="Email" required="">
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
            <button type="submit" class="btn btn-primary btn-block">Daftar</button>
          </form>
        </div>
      </div>


    </div>
  </div>
</div>
</section>
