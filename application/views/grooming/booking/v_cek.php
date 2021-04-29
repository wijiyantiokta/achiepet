
<section class="ftco-section ftco-no-pt ftco-no-pb" style="margin-top: 50px; margin-bottom: 50px;">
  <div class="container">
    <div class="row justify-content-center pb-5 mb-3">
      <div class="col-md-7 heading-section text-center ftco-animate">
        <h2>Cek Booking</h2>
      </div>
    </div>
    <div class="row d-flex no-gutters">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
            <h5><?= $detail->jenis_grooming ?> - Rp. <?= number_format($detail->harga_grooming) ?></h5>
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
            <form action="<?= base_url() ?>booking/cek/<?= $detail->id_jenis_grooming ?>" method="post">
              <div class="row">
                <div class="col-md-6">
                  <label for="">Tanggal</label> 
                  <input type="date" name="tanggal" class="form-control" required="" min="<?= (new DateTime('tomorrow'))->format('Y-m-d') ?>">
                </div>
                <div class="col-md-6">
                  <label for="">Jam</label>
                  <input type="time" name="jam" min="09:00" max="15:00" class="form-control" required="">
                </div>
              </div>
              <br>
              <h7> NB : Batas Maksimal Grooming Jam 15.00 atau 3.00 pm (Sore). </h7><br>
              <h7> Pemesanan setelah jam tersebut, tidak dilayani.</h7>
              <hr>
              <button type="submit" class="btn btn-primary">Cek</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <script type="text/javascript">
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("tanggal")[0].setAttribute('min', today);
 
</script> -->
