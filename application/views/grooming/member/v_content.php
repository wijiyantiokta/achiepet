 <section class="hero-wrap hero-wrap-2" style="background-image: url('<?= base_url() ?>public/template/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-end">
      <div class="col-md-9 ftco-animate pb-5">
        <p class="breadcrumbs mb-2"><span class="mr-2"><a href="<?= base_url() ?>home">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Profil <i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-0 bread">Profil</h1>
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
         <h3 class="text-center">Profil</h3>
         <hr>
         <table class="table table-striped">
				 <tr>
             <th width="25%">ID</th>
             <th width="5%">:</th>
             <th><?= $data->id_pelanggan ?></th>
           </tr>
					 <tr>
             <th width="25%">Nama</th>
             <th width="5%">:</th>
             <th><?= $data->nama_pelanggan ?></th>
           </tr>
           <tr>
             <th width="25%">Username</th>
             <th width="5%">:</th>
             <th><?= $data->username_pelanggan ?></th>
           </tr>
           <tr>
             <th width="25%">Email</th>
             <th width="5%">:</th>
             <th><?= $data->email_pelanggan ?></th>
           </tr>
           <tr>
             <th width="25%">Jenis Kelamin</th>
             <th width="5%">:</th>
             <th><?= $data->jk_pelanggan ?></th>
           </tr>
           <tr>
             <th width="25%">Telepon</th>
             <th width="5%">:</th>
             <th><?= $data->telepon_pelanggan ?></th>
           </tr>
           <tr>
             <th width="25%">Alamat</th>
             <th width="5%">:</th>
             <th><?= $data->alamat_pelanggan ?></th>
           </tr>
         </table>
       </div>
     </div>


   </div>
 </div>
</div>
</section>
