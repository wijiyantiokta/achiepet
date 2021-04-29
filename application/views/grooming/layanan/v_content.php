<section class="ftco-section bg-light">
 <div class="container">
  <div class="row justify-content-center pb-5 mb-3">
    <div class="col-md-7 heading-section text-center ftco-animate">
      <h2>Layanan</h2>
    </div>
  </div>
  <div class="row">
    <?php foreach ($data as $key => $value): ?>
     <div class="col-md-4 ftco-animate">
       <div class="block-7">
        <div class="img" style="background-image: url(<?= base_url() ?>public/template/images/slide-4.jpg);"></div>
        <div class="text-center p-4">
          <span class="excerpt d-block"><?= $value->jenis_grooming ?></span>
          <span class="price"><sup>Rp. </sup> <span class="number"><?= number_format($value->harga_grooming) ?></span> <sub>/pet</sub></span>
          <a href="<?= base_url() ?>booking/cek/<?= $value->id_jenis_grooming ?>" class="btn btn-primary d-block px-2 py-3">Order</a>
        </div>
      </div>
    </div>
  <?php endforeach ?>
  

</div>
</div>
</section>
